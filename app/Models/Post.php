<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;
 
  // the property fileable is to define the fields that we can fill in the database 
  // its like a white list and necessary to use the create method or can be fill manually
  protected $fillable = ['title','content','category_id','description','image','posted','slug'];
    
}
