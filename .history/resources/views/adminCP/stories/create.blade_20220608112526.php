@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">{{ __('Add New Story') }}</div>
            <!-- Display Error -->
            @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
            @endif
            <div class="card-body">
               <!-- thông báo khi submit form -->
               @if (session('status'))
               <div class="alert alert-success" role="alert">
                  {{ session('status') }}
               </div>
               @endif

               <form method="POST" action="{{route('story.store')}}">
                  @csrf
                  <div class="form-group">
                     <label for="inputAddress">Title</label>
                     <input type="text" value="{{old('title')}}" onkeyup="ChangeToSlug()" name="title" class="form-control" id="slug" placeholder="Title">
                  </div>
                  <div class="form-group">
                     <label>Slug</label>
                     <input type="text" value="{{old('slug')}}" name="slug" class="form-control" id="convert_slug" placeholder="Slug">
                  </div>
                  <div class="form-group">
                     <label>Description</label>
                     <textarea class="form-control" name="description" rows="3">{{old('description')}}</textarea>
                  </div>
                  <div class="form-group">
                     <label>Author</label>
                     <input type="text" value="{{old('author')}}" name="author" class="form-control" placeholder="Author">
                  </div>
                  <div class="form-group">
                     <label>Tag</label>
                     <input type="text" value="{{old('tag_story')}}" name="tag_story" class="form-control" placeholder="Tag">
                  </div>
                  <div class="form-group">
                     <label>Image</label>
                     <input type="file" name="image" class="form-control-file">
                  </div>
                  <div class="form-group">
                     <label for="inputState">Category</label>
                     <select id="inputState" name="category" class="form-control">
                        @foreach($category as $key => $value)
                        <option value="{{$value->id}}" selected>{{$value->title}}</option>
                        $endforeach
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="inputState">Status</label>
                     <select id="inputState" name="status" class="form-control">
                        <option value="0" selected>Activated</option>
                        <option value="1">Not activated</option>
                     </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Add New</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection('content')