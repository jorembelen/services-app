<?php

namespace App\Http\Livewire;

use App\Models\ProvinceCity;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class NavbarComponent extends Component
{
    public $email, $password, $remember, $cities, $password_confirmation, $fname, $lname, $mobile;
    public $selectedProvince = null;
    public $selectedCities = null;

    public function mount()
    {
        $this->cities = collect();
    }

    public function render()
    {
        $prov = DB::table('provinces')->orderBy('name', 'asc')->get();

        return view('livewire.navbar-component', compact('prov'));
    }

    public function updatedselectedProvince($selectedProvince)
    {
        $this->cities = ProvinceCity::whereprovince_id($selectedProvince)->orderBy('name', 'asc')->get();
    }

    public function showLogin()
    {
        $this->dispatchBrowserEvent('show-form');
        $this->dispatchBrowserEvent('hide-regProvider-form');
        $this->dispatchBrowserEvent('hide-regUser-form');
        $this->resetInput();
        $this->resetValidation();
    }

    public function close()
    {
        $this->dispatchBrowserEvent('hide-form');
        $this->dispatchBrowserEvent('hide-regProvider-form');
        $this->dispatchBrowserEvent('hide-regUser-form');
        $this->showPass = false;
        $this->resetInput();
        $this->resetValidation();
    }

    public function resetInput()
    {
        $this->fname = null;
        $this->lname = null;
        $this->mobile = null;
        $this->email = null;
        $this->password = null;
        $this->password_confirmation = null;
        $this->selectedProvince = null;
        $this->selectedCities = null;
    }

    public function login()
    {
        $data = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt($data)){
            return redirect()->intended('/');
            $this->dispatchBrowserEvent('hide-form');
        }else{
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'error',
                'title' => 'Sorry, credentials are invalid!',
                'text' => '',
            ]);
        }
    }

    public function showRegProvider()
    {
        $this->dispatchBrowserEvent('show-regProvider-form');
        $this->dispatchBrowserEvent('hide-form');
        $this->dispatchBrowserEvent('hide-regUser-form');
        $this->resetInput();
    }

    public function showRegUser()
    {
        $this->dispatchBrowserEvent('hide-regProvider-form');
        $this->dispatchBrowserEvent('show-regUser-form');
        $this->dispatchBrowserEvent('hide-form');
        $this->resetInput();
    }

    public function registerProvider()
    {
        $data = $this->validate([
            'fname' => 'required',
            'lname' => 'required',
            'password' => 'required|confirmed',
            'selectedProvince' => 'required',
            'selectedCities' => 'required_with:selectedProvince',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:11',
        ],[
            'fname.required' => 'First name is required.',
            'lname.required' => 'Last name is required.',
            'selectedProvince.required' => 'Please choose province.',
            'selectedCities.required_with' => 'Please choose city / municipality.',
        ]);

        $province = DB::table('provinces')->select('name')->find($this->selectedProvince);
        $city = DB::table('province_cities')->select('name')->find($this->selectedCities);

        DB::beginTransaction();
        if($data) {
            $data['role'] = 'SVP';
            $user = User::create($data);
            DB::commit();
            $user->location()->create([
                'province' => $province->name,
                'city' => $city->name,
            ]);
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'Registration was completed!',
                'text' => '',
            ]);
            $this->close();
            auth()->login($user);
            return redirect()->route('svp.dashboard');
        }else{
            DB::rollBack();
            return redirect()->back();
        }

    }

    public function registerUser()
    {
        $data = $this->validate([
            'fname' => 'required',
            'lname' => 'required',
            'password' => 'required|confirmed',
            'email' => 'required|email|unique:users,email',
        ],[
            'fname.required' => 'First name is required.',
            'lname.required' => 'Last name is required.',
        ]);

        DB::beginTransaction();
        if($data) {
            $user = User::create($data);
            DB::commit();
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'Registration was completed!',
                'text' => '',
            ]);
            $this->close();
            auth()->login($user);
            return redirect()->route('user.dashboard');
        }else{
            DB::rollBack();
            return redirect()->back();
        }
    }


}
