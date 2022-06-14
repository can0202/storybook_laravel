@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">{{ __('Update Chapter') }}</div>
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

               <form method="POST" action="{{route('chapter.update', [$chapter->id])}}">
                  @method('PUT')
                  @csrf
                  <div class="form-group">
                     <label for="inputAddress">Title</label>
                     <input type="text" value="{{$chapter->title}}" onkeyup="ChangeToSlug()" name="title" class="form-control" id="slug" placeholder="Title">
                  </div>
                  <div class="form-group">
                     <label>Slug</label>
                     <input type="text" value="{{$chapter->slug}}" name="slug" class="form-control" id="convert_slug" placeholder="Slug">
                  </div>
                  <div class="form-group">
                     <label>Description</label>
                     <textarea class="form-control" name="description" rows="3">{{$chapter->description}}</textarea>
                  </div>
                  <div class="form-group">
                     <label>Content</label>
                     <textarea class="form-control" id="content_editor" name="content" rows="3">{{$chapter->content}}</textarea>
                  </div>
                  <div class="form-group">
                     <label for="inputState">Story</label>
                     <select id="inputState" name="story_name" class="form-control">
                        @foreach($story as $key => $value)
                        <option {{ $value->id == $chapter->story_id ? 'selected' : '' }} value="{{$value->id}}">{{$value->title}}</option>
                        @endforeach
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="inputState">Status</label>
                     <select id="inputState" name="status" class="form-control">
                        @if($chapter->status == 0)
                        <option value="0" selected>Activated</option>
                        <option value="1">Not activated</option>
                        @else
                        <option value="0">Activated</option>
                        <option value="1" selected>Not activated</option>
                        @endif
                     </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection('content')