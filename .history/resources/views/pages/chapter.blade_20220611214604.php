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
            <h1>{{$story->title}} - <span>{{$chapter->title}}</span></h1>
            <div class="chapter-btn d-flex align-items-center justify-content-center">
               <a href="" class="btn btn-primary">Tập trước</a>
               <select name="" id="select_chapter">
                  <option value="">ádsd</option>
               </select>
               <a href="" class="btn btn-primary">Tập sau</a>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa facilis dolor consectetur vitae cum nesciunt reiciendis atque id fugit iste quaerat numquam aliquid explicabo, dolores omnis, distinctio cumque aspernatur quod?</p>
         </div>
      </div>
   </div>
</div>
@endsection