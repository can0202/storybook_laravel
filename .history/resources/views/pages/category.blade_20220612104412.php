@extends('../welcome')
@section('content')
<div class="content mt-5 mb-5">
   <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
         <li class="breadcrumb-item active" aria-current="page"></li>
      </ol>
   </nav>
   <div class="row">
      <div class="col-sm-9">
         <h3 class="title-main"></h3>
         <div class="all-story">
            @foreach($story as $key => $value)
            <div class="info-img position-relative">
               <div class="icon ">
                  @if($value->label_hot == 0)
                  <img src="{{asset('img/icon-hot.gif')}}" alt="">
                  @else
                  @endif
               </div>
               <img class="img-main w-100" src="{{asset('uploads/story/'.$value->image)}}" alt="">
               <div class="story-text text-center">
                  <a href="{{url('xem-truyen/'.$value->slug)}}">
                     <h4>{{$value->title}}</h4>
                  </a>
               </div>
            </div>
            @endforeach
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