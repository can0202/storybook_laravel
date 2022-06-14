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
      <div class="col-sm-9">
         <div class="story-info">
            <div class="row">
               <div class="col-sm-4">
                  <div class="img-story">
                     <img src="{{asset('uploads/story/'.$story->image)}}" alt="">
                  </div>
               </div>
               <div class="col-sm-8">
                  <div class="content">
                     <h1>dasdsds</h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-3">
         <div class="sidebar">
            <div class="story-desc">
               <h2>Hot story</h2>
               <ul class="list-hot">
                  <li>
                     <span>1</span>
                     <a href="">Mê vợ không lối về</a>
                  </li>
                  <li>
                     <span>2</span>
                     <a href="">Mê vợ không lối về</a>
                  </li>
                  <li>
                     <span>3</span>
                     <a href="">Mê vợ không lối về</a>
                  </li>
                  <li>
                     <span>4</span>
                     <a href="">Mê vợ không lối về</a>
                  </li>
                  <li>
                     <span>5</span>
                     <a href="">Mê vợ không lối về</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection