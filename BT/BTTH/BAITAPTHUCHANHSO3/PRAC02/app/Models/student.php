<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public function myClass()
    {
        return $this->belongsTo(myClass::class);
    }
}
