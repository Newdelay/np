<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activations extends Model
{

    protected $table = 'activations';

    protected $fillable = [
        'id',
        'user_id',
        'code',
        'completed',
        'completed_at',

    ];

}
