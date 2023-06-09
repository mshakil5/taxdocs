<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'is_type',
        'password',
        'address',
        'country',
        'city',
        'phone',
        'subscription_plan',
        'bank_acc_number',
        'bank_acc_sort_code',
        'postcode',
        'photo',
        'reg_number',
        'note',
        'bname',
        'house_number',
        'town',
        'bank_account_number',
        'surname',
        'firm_id',
        'accountant_name',
        'baddress',
        'street_name',
        'status',
        'about',
        'facebook',
        'twitter',
        'google',
        'linkedin',
        'updated_by',
        'created_by',
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

    

    
}
