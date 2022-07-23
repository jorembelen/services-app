<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavbarComponent extends Component
{
    public $email, $password, $remember;

    public function render()
    {
        return view('livewire.navbar-component');
    }

    public function showLogin()
    {
        $this->dispatchBrowserEvent('show-form');
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

}
