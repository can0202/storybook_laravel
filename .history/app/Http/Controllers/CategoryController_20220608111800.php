<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      //
      $list_category = Category::orderBy('id', 'DESC')->get();
      return view('adminCP.categories.index')->with(compact('list_category'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      //
      return view('adminCP.categories.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      // add new value to db
      $data = $request->validate([
         'title' => 'required|unique:categories|max:255',
         'slug' => 'required',
         'description' => 'required',
         'status' => 'required'
      ]);

      $category = new Category();
      $category->title = $data['title'];
      $category->slug = $data['slug'];
      $category->description = $data['description'];
      $category->status = $data['status'];

      $category->save();
      return redirect()->back()->with('status', 'Add new category successful!');
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
      $category = Category::find($id);
      return view('adminCP.categories.edit')->with(compact('category'));
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
         'status' => 'required'
      ]);

      $category = Category::find($id);
      $category->title = $data['title'];
      $category->slug = $data['slug'];
      $category->description = $data['description'];
      $category->status = $data['status'];

      $category->save();
      return redirect()->back()->with('status', 'Update category successful!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      // Delete Value
      Category::find($id)->delete();
      return redirect()->back()->with('status', 'Detele category successful!');
   }
}
