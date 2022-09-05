<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;



    // tag relationship
    public function tag()
    {
          return $this->belongsToMany(tag::class);
    }

    // Category Relationship
    public function category()
    {
          return $this->belongsTo(category::class);
    }

     // User Relationship
     public function user()
     {
           return $this->belongsTo(User::class);
     }
}
