<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{

    protected $table = 'cities';

    protected $fillable = [
        'id',
        'name',
        'country_id',
        'area_id',
    ];

}
