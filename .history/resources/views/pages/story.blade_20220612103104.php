@extends('../welcome')
@section('content')
<div class="content mt-5 mb-5">
   <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
         <li class="breadcrumb-item">
            <a href="{{url('category/'.$story->category->slug)}}">{{$story->category->title}}</a>
         </li>
         <li class="breadcrumb-item active" aria-current="page">{{$story->title}}</li>
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
                  <h1>{{$story->title}}</h1>
                  <ul>
                     <li><i class="ion-person"></i> Author: {{$story->author}}</li>
                     <li>
                        <i class="ion-wifi"></i> Status:
                        @if($story->status == 0)
                        <span class="text text-success">Activated</span>
                        @endif
                     </li>
                     <li><i class="ion-pricetag"></i> Type: <a href="{{url('category/'.$story->category->slug)}}">{{$story->category->title}}</a></li>
                     <li><i class="ion-information-circled"></i> Chapter number: 200</li>
                     <li><i class="ion-eye"></i> Views: 200</li>
                     <li>
                        @if($chapterFirst)
                        <a href="{{url('xem-chapter/'.$chapterFirst->slug)}}" class="btn btn-primary">Read Online</a>
                        @else
                        <a href="" class="btn btn-primary isDisable">Read Online</a>
                        @endif
                     </li>
                  </ul>
               </div>
            </div>
            <div class="story-desc">
               <h2>Description</h2>
               <p>{{$story->description}}</p>
            </div>
            <div class="story-desc">
               <h2>Table of contents</h2>
               @php
               $count = count($chapter)
               @endphp
               @if($count == 0)
               <p>Table Of Content Updating...</p>
               @else
               <ul class="list-content">
                  @foreach($chapter as $key => $value)
                  <li><a href="{{url('xem-chapter/'.$value->slug)}}">
                        <i class="ion-ios-arrow-right"></i> {{$value->title}}</a>
                  </li>
                  @endforeach
               </ul>
               @endif
            </div>
            <div class="story-desc">
               <h2>Tags</h2>
               @php
               $tags = explode(",", $story->tag_story);
               dd($tags);
               @endphp
               <ul class="tags">
                  <li><a href="#" class="tag">HTML</a></li>
                  <li><a href="#" class="tag">CSS</a></li>
                  <li><a href="#" class="tag">JavaScript</a></li>
               </ul>
            </div>
            <div class="story-desc">
               <h2>Related Stories</h2>
               <div class="all-story">
                  @foreach($storyByCategory as $key => $value)
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
            <div class="story-desc">
               <h2>Comment</h2>
               <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10"></div>
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