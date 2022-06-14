<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Story;


class StoryController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      //
      $list_story = Story::orderBy('id', 'DESC')->get();
      return view('adminCP.stories.index')->with(compact('list_story'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      //
      $category = Category::orderBy('id', 'DESC')->get();
      return view('adminCP.stories.create')->with(compact('category'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      //
      $data = $request->validate([
         'title' => 'required|unique:stories|max:255',
         'slug' => 'required',
         'description' => 'required',
         'author' => 'required',
         'tag_story' => 'required',
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,max_width=1000,min_height=100,max_height=1000',
         'category_story' => 'required',
         'status' => 'required',
         'label_hot' => 'required'
      ]);

      $story = new Story();
      $story->title = $data['title'];
      $story->slug = $data['slug'];
      $story->description = $data['description'];
      $story->author = $data['author'];
      $story->tag_story = $data['tag_story'];
      $story->image = $data['image'];
      $story->category_id = $data['category_story'];
      $story->status = $data['status'];
      $story->label_hot = $data['label_hot'];

      //Upload Image on Folder
      $get_img = $request->image;
      $path = 'uploads/story/';
      $get_name_img = $get_img->getClientOriginalName();
      $name_img = current(explode('.', $get_name_img));
      $new_img = $name_img . rand(0, 99) . '.' . $get_img->getClientOriginalExtension();
      $get_img->move($path, $new_img);
      $story->image = $new_img;

      $story->save();
      return redirect()->back()->with('status', 'Add new story successful!');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
      //
      $story = Story::find($id);
      $category = Category::orderBy('id', 'DESC')->get();
      return view('adminCP.stories.edit')->with(compact('story', 'category'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
      $data = $request->validate([
         'title' => 'required|max:255',
         'slug' => 'required',
         'description' => 'required',
         'author' => 'required',
         'tag_story' => 'required',
         'category_story' => 'required',
         'status' => 'required'
      ]);

      $story = Story::find($id);
      $story->title = $data['title'];
      $story->slug = $data['slug'];
      $story->description = $data['description'];
      $story->author = $data['author'];
      $story->tag_story = $data['tag_story'];
      $story->category_id = $data['category_story'];
      $story->status = $data['status'];
      $story->label_hot = $data['label_hot'];

      //Upload Image on Folder
      $get_img = $request->image;
      if ($get_img) {
         $path = 'uploads/story/' . $story->image;
         if (file_exists($path)) {
            unlink($path);
         }
         $path = 'uploads/story/';
         $get_name_img = $get_img->getClientOriginalName();
         $name_img = current(explode('.', $get_name_img));
         $new_img = $name_img . rand(0, 99) . '.' . $get_img->getClientOriginalExtension();
         $get_img->move($path, $new_img);
         $story->image = $new_img;
      }


      $story->save();
      return redirect()->back()->with('status', 'Update story successful!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      // Delete Story
      $story = Story::find($id);
      $path = 'uploads/story/' . $story->image;
      if (file_exists($path)) {
         unlink($path);
      }
      $story->delete();
      return redirect()->back()->with('status', 'Delete story successful!');
   }
}
