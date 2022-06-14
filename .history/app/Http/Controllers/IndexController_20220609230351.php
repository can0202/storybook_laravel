<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   //Home page
   public function home()
   {
      // Get all stroy
      $story = Story::orderBy('id', 'DESC') - where('status', 0)->get();
   }
}
