<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
   use HasFactory;
   public $timestamps = false; // set time to false
   protected $fillable = [
      'title', 'slug', 'description', 'author', 'tag_story', 'image', 'category_id', 'type_id', 'status'
   ];
   protected $primaryKey = 'id';
   protected $table = 'stories';
}
