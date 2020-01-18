<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $hidden = ['user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
