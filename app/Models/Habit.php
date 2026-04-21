<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    protected $fillable = [
        'name',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);// usa o user_id
    }

    public function name()
    {
        return $this->belongsTo(User::class);// usa o user_id
    }
}
