<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
   use HasFactory;
   public $timestamps = false; // set time to false
   protected $fillable = [
      'title', 'slug', 'description', 'author', 'tag_story', 'image', 'category_id', 'status'
   ];
   protected $primaryKey = 'id';
   protected $table = 'stories';

   public function category()
   {
      return $this->belongsTo('App\Models\Category', 'category_id', 'id'); // 1 story have 1 category
   }

   public function chapter()
   {
      return $this->hasMany('App\Models\Chapter');
   }
}
