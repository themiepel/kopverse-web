<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BakeryProfile extends Model
{
    protected $fillable = [

        'user_id',

        'bakery_name',

        'role',

        'level',

        'xp',

        'coin',

        'energy',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
