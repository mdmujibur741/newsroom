<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    public function post()
    {
         return $this->hasOne(post::class);
    }


    public function tag()
    {
          return $this->hasOne(tag::class);
    }
}
