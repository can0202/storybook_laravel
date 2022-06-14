@extends('../welcome')
@section('content')
<div class="content category mt-5 mb-5">
   <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">{{$category_name}}</li>
      </ol>
   </nav>
   <div class="row">
      <div class="col-sm-9">
         <h3 class="title-main">{{$category_name}}</h3>
         @php
         $count = count($story);
         @endphp
         @if($count)
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
         @else
         <p>Content Updating...</p>
         @endif

      </div>
      <div class="col-sm-3">
         @include('pages.sidebar')
      </div>
   </div>
</div>
@endsection