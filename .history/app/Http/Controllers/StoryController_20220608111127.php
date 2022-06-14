<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

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
      return view('adminCP.stories.index');
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      //
      return view('adminCP.stories.create');
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
         'image' => 'required',
         'category' => 'required',
         'status' => 'required'
      ]);

      $story = new Story();
      $story->title = $data['title'];
      $story->slug = $data['slug'];
      $story->description = $data['description'];
      $story->author = $data['author'];
      $story->title = $data['title'];
      $story->title = $data['title'];
      $story->title = $data['title'];
      $story->title = $data['title'];
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
      return view('adminCP.stories.edit');
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
      //
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      //
   }
}
