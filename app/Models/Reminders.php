<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reminders extends Model
{

    protected $table = 'reminders';

    protected $fillable = [
        'id',
        'user_id',
        'code',
        'completed',
        'completed_at',

    ];

}
