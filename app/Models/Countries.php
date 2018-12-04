<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{

    protected $table = 'countries';

    protected $fillable = [
        'id',
        'sortname',
        'name',
        'phonecode',
        'status',
    ];

}
