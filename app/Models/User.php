<?php

namespace App\Models;

use App\Traits\UserTraits;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, UserTraits;

    protected $dates = ['created_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'lname',
        'mobile',
        'email',
        'role',
        'status',
        'password',
        'profile_photo_path',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function getFullNameAttribute()
    {
        return "$this->fname $this->lname";
    }

    public function getAvatarAttribute()
    {
        if($this->profile_photo_path == null){
            return asset('assets/img/noimage.png');
        }else{
            return Storage::disk('s3')->url('uploads/avatars/' .$this->profile_photo_path);
        }
    }

    public function userMembership()
    {
        return $this->created_at->format('M Y');
    }

    public function userRole()
    {
       if($this->role == 'ADM'){
            return 'Admin';
       }elseif($this->role == 'SVP'){
            return 'Service Provider';
       }else{
            return 'Client';
       }
    }

    public function isAdmin()
    {
        return $this->role == 'ADM';
    }

    public function isProvider()
    {
        return $this->role == 'SVP';
    }

    public function isUser()
    {
        return $this->role == 'USR';
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'provider_id');
    }

    public function providerServices()
    {
        return $this->hasMany(ProviderService::class);
    }

    public function location()
    {
        return $this->hasMany(UserLocation::class);
    }

    public function userServices()
    {
        return $this->services();
    }

    public function favorite()
    {
        return $this->hasMany(UserFavorite::class);
    }

    public function bookings()
    {
        return $this->hasMany(UserBooking::class);
    }

    public function providerBookings()
    {
        return $this->hasMany(UserBooking::class, 'provider_id');
    }

    public function getUserTotalBookingsAttribute()
    {
        return $this->bookings()->count();
    }

    public function getProviderTotalBookingsAttribute()
    {
        return $this->providerBookings()->count();
    }

}
