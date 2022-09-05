<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;


    // Post Relationship
    public function post()
    {
          return $this->belongsToMany(post::class);
    }

    // Category Relationship
    public function category()
    {
           return $this->belongsTo(category::class);
    }
}
