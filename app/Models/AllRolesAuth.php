<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AllRolesAuth extends Model
{

    protected $table = 'all_roles_auth';

    protected $fillable = [
        'id',
        'role_id',
        'route_name',
    ];

}
