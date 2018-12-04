<?php

namespace App\Models;

use Cartalyst\Sentinel\Users\EloquentUser as SentinelUser;

class User extends SentinelUser
{
    protected $fillable = [
        'reference_code',
        'registrar_id',
        'parent_id',
        'settlement_status',
        'identity',
        'username',
        'email',
        'password',
        'permissions',
        'last_login',
        'first_name',
        'last_name',
        'country',
        'city',
        'birthday',
        'telephone',
        'avatar',
        'status',
        'investment',
        'settlement_model',
        'investment_date',
        'push_id',
        'user_type',
        'masternode',
        'bot',
    ];

    protected $loginNames = ['email','username'];
}
