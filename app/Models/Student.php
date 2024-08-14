<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

//class Student extends Model
class Student extends Authenticatable implements AuthenticatableContract
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'id',
        'username',
        'email',
        'password',
        'password_confirmation',
        'user_fname',
        'user_mname',
        'user_lname',
        'user_gender',
        'user_address',
        'user_city',
        'user_state',
        'user_zipcode',
        'user_phone',
        'user_birthday',
        'user_ssn',
        'license_number',
        'license_state',
        'ticket_state',
        'ticket_county',
        'ticket_court',
        'ticket_number',
        'ticket_due_date',
        'register_time',
        'complete_time',
        'is_confirmed',
        'is_completed',
        'is_admin',
        'paid',
        'payment_method',
        'get_class_completion_certificate',
        'source',
    ];

     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class, 'user_id');
    } 



    protected $dispatchesEvents = [
        'created' => \App\Events\NewRegistration::class,
    ];



}
