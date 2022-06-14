<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
      // Get chapter of story `::with('story')` by `story id`
      $chapter = Chapter::with('story')->where('story_id', $story->id)->orderBy('id', 'ASC')->get();
      return view('pages.story')->with(compact('story', 'chapter'));
   }

   public function watchchapter($slug)
   {
      $category = Category::orderBy('id', 'ASC')->get();
      $story = Story::where('slug', $slug)->first();
      // Get story breadcrum
      $story_breadcrum = Story::with('category')->where('id', $story->id)->first();
      // lay chapter theo story
      $chapter = Chapter::with('story')->where('slug', $slug)->where('story_id', $story->id)->first(); // lay chapter theo truyen
      //
      // Get all chapter
      $all_chapter = Chapter::with('story')->orderBy('id', 'ASC')->get();
      // Get next chapter
      $nextChapter = Chapter::where('story_id', $story->id)->where('id', '>', $chapter->id)->min('slug');

      return view('pages.chapter')->with(compact('story', 'chapter', 'all_chapter', 'nextChapter'));
   }
}
