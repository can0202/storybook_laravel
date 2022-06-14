<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   use HasFactory;

   public $timestamps = false; // set time to false
   protected $fillable = [
      'title', 'slug', 'description', 'status'
   ];
   protected $primaryKey = 'id';
   protected $table = 'categories';
}
