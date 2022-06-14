@extends('../welcome')
@section('content')
<div class="content mt-5 mb-5">
   <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
         <li class="breadcrumb-item"><a href="{{url('category/'.$story_breadcrum->category->slug)}}">{{$story_breadcrum->category->title}}</a></li>
         <li class="breadcrumb-item active" aria-current="page">{{$chapter->story->title}} - {{$chapter->title}}</li>
      </ol>
   </nav>
   <div class="row">
      <div class="col-sm-12">
         <div class="content-single">
            <h1>{{$chapter->story->title}} - <span>{{$chapter->title}}</span></h1>
            <div class="chapter-btn">
               <a href="{{url('xem-chapter/'.$prevChapter)}}" class="btn btn-primary {{ $chapter->id == $min_id->id ? 'isDisable' : '' }}">Prev</a>
               <select name="" id="select_chapter">
                  @foreach($all_chapter as $key => $value)
                  <option value="{{url('xem-chapter/'.$value->slug)}}">{{$value->title}}</option>
                  @endforeach
               </select>
               <a href="{{url('xem-chapter/'.$nextChapter)}}" class="btn btn-primary {{$chapter->id == $max_id->id ? 'isDisable' : ''}}">Next</a>
            </div>
            <article>
               {!! $chapter->content !!}
            </article>
            <div class="chapter-btn">
               <a href="{{url('xem-chapter/'.$prevChapter)}}" class="btn btn-primary {{ $chapter->id == $min_id->id ? 'isDisable' : '' }}">Prev</a>
               <select name="" id="select_chapter">
                  @foreach($all_chapter as $key => $value)
                  <option value="{{url('xem-chapter/'.$value->slug)}}">{{$value->title}}</option>
                  @endforeach
               </select>
               <a href="{{url('xem-chapter/'.$nextChapter)}}" class="btn btn-primary {{$chapter->id == $max_id->id ? 'isDisable' : ''}}">Next</a>
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
         </div>
      </div>
   </div>
</div>
@endsection