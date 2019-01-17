<?php

namespace Abrahamf24\Plans\Test\Models;

use Abrahamf24\Plans\Traits\HasPlans;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasPlans;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
