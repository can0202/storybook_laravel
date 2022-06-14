<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
   use HasFactory;

   public $timestamps = false; // set time to false
   protected $fillable = [
      'title', 'slug', 'description', 'content', 'story_id', 'status'
   ];
   protected $primaryKey = 'id';
   protected $table = 'chapters';

   public function story()
   {
      return $this->belongsTo('App\Models\Story', 'story_id', 'id');
   }
}
