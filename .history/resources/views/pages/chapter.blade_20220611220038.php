@extends('../welcome')
@section('content')
<div class="content mt-5 mb-5">
   <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="#">Home</a></li>
         <li class="breadcrumb-item"><a href="#">Library</a></li>
         <li class="breadcrumb-item active" aria-current="page">Data</li>
      </ol>
   </nav>
   <div class="row">
      <div class="col-sm-12">
         <div class="content text-center">
            <h1>{{$chapter->story->title}} - <span>{{$chapter->title}}</span></h1>
            <div class="chapter-btn d-flex align-items-center justify-content-center">
               <a href="" class="btn btn-primary">Tập trước</a>
               <select name="" id="select_chapter">
                  <option value="">ádsd</option>
               </select>
               <a href="" class="btn btn-primary">Tập sau</a>
            </div>
            <p>{{$chapter->content}}</p>
         </div>
      </div>
   </div>
</div>
@endsection