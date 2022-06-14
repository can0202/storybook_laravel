<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Story;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   //Home page
   public function home()
   {
      // Get all stroy
      $story = Story::orderBy('id', 'DESC')->where('status', 0)->get();
      return view('pages.home')->with(compact('story'));
   }

   public function watchstory($slug)
   {
      // Get story by category ::with('category')
      $story = Story::with('category')->where('slug', $slug)->where('status', 0)->first();
      // Get chapter of story by story id
      $chapter = Chapter::with('story')->where('story_id', $story->id)->orderBy('id', 'DESC')->get();
      return view('pages.story')->with(compact('story'));
   }
}
