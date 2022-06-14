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
        // Get all category
        $category = Category::orderBy('id', 'ASC')->get();
        // Get all stroy
        $story = Story::orderBy('id', 'DESC')->where('status', 0)->get();
        return view('pages.home')->with(compact('category', 'story'));
    }

    public function watchcategory($slug)
    {
        // Get all category
        $category = Category::orderBy('id', 'ASC')->get();
        // Get ID Category
        $category_id = Category::where('slug', $slug)->first();
        // Get Name Category
        $category_name = $category_id->title;
        //Get All Story By Category
        $story = Story::where('status', 0)->where('category_id', $category_id->id)->orderBy('id', 'ASC')->get();
        return view('pages.category')->with(compact('category', 'category_id', 'category_name', 'story'));
    }

    public function watchstory($slug)
    {
        // Get all category
        $category = Category::orderBy('id', 'ASC')->get();
        // Get story by category ::with('category')
        $story = Story::with('category')->where('slug', $slug)->where('status', 0)->first();
        // Get story hot
        $hotStory = Story::where('label_hot', 0)->take(10)->get();
        // Get chapter of story `::with('story')` by `story id`
        $chapter = Chapter::with('story')->where('story_id', $story->id)->orderBy('id', 'ASC')->get();
        // Get Chapter First
        $chapterFirst = Chapter::with('story')->where('story_id', $story->id)->orderBy('id', 'ASC')->first();
        // Get Story In The Same Category
        $storyByCategory = Story::with('category')->where('category_id', $story->category->id)->whereNotIn('id', [$story->id])->get();
        return view('pages.story')->with(compact('category', 'story', 'hotStory', 'chapter', 'chapterFirst', 'storyByCategory'));
    }

    public function watchchapter($slug)
    {
        $category = Category::orderBy('id', 'ASC')->get();

        $story = Chapter::where('slug', $slug)->first(); // Get Chapter by Story 

        $story_breadcrum = Story::with('category')->where('id', $story->story_id)->first(); // Get story breadcrum

        $chapter = Chapter::with('story')->where('slug', $slug)->where('story_id', $story->story_id)->first();  // Get chapter by story

        $all_chapter = Chapter::with('story')->orderBy('id', 'ASC')->get(); // Get all chapter

        $nextChapter = Chapter::where('story_id', $story->story_id)->where('id', '>', $chapter->id)->min('slug'); // Get next chapter
        $prevChapter = Chapter::where('story_id', $story->story_id)->where('id', '<', $chapter->id)->max('slug'); // Get prev chapter

        $max_id = Chapter::where('story_id', $story->story_id)->orderBy('id', 'DESC')->first(); // Get Max Id of Story
        $min_id = Chapter::where('story_id', $story->story_id)->orderBy('id', 'ASC')->first(); // Get Min Id of Story
        return view('pages.chapter')->with(compact('category', 'story', 'story_breadcrum', 'chapter', 'all_chapter', 'nextChapter', 'prevChapter', 'max_id', 'min_id'));
    }
}
