<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Story;
use App\Models\Chapter;

class ChapterController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $list_chapter = Chapter::orderBy('id', 'DESC')->get();
      return view('adminCP.chapters.index')->with(compact('list_chapter'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      //
      $story = Story::orderBy('id', 'ASC')->get();
      return view('adminCP.chapters.create')->with(compact('story'));
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
         'content' => 'required',
         'story_name' => 'required',
         'status' => 'required'
      ]);

      $chapter = new Chapter();
      $chapter->title = $data['title'];
      $chapter->slug = $data['slug'];
      $chapter->description = $data['description'];
      $chapter->content = $data['content'];
      $chapter->story_id = $data['story_name'];
      $chapter->status = $data['status'];

      $chapter->save();
      return redirect()->back()->with('status', 'Add new chapter successful!');
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
