<?php

namespace App\Models\Sugestion;

use Illuminate\Database\Eloquent\Model;

class Sugestion extends Models
{
    protected $fillable = ['name', 'email', 'suggestions', 'age'];
    //protected $guarded = [];
}
