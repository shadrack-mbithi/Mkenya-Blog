<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
      //My Added protected and fillable things
      protected $fillable = ['title', 'body','comments'];
    
}
