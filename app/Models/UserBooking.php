<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBooking extends Model
{
    use HasFactory;

    protected $dates = ['date', 'time'];

    protected $fillable = [
        'user_id',
        'service_id',
        'location',
        'price',
        'date',
        'time',
        'notes',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function getFormattedDateAttribute()
    {
        return $this->date->format('d M Y');
    }

    public function getFormattedTimeAttribute()
    {
        return $this->time->format('h:i a');
    }

    public function getFormattedPriceAttribute()
    {
        return number_format($this->price, 2);
    }

    public function getStatusBadgeAttribute()
    {
    	$badges = [
    		'pending' => 'primary',
    		'in orogress' => 'success',
    		'cancelled' => 'warning',
    		'rejected by user' => 'danger',
    	];

    	return $badges[$this->status];
    }

}
