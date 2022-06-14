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
         <div class="content-single">
            <h1>{{$chapter->story->title}} - <span>{{$chapter->title}}</span></h1>
            <div class="chapter-btn">
               <a href="" class="btn btn-primary">Tập trước</a>
               <select name="" id="select_chapter">
                  @foreach($all_chapter as $key => $value)
                  <option value="{{url('xem-chapter/'.$value->slug)}}">{{$value->title}}</option>
                  @endforeach
               </select>
               <a href="" class="btn btn-primary">Tập sau</a>
            </div>
            <article>
               {!! $chapter->content !!}
            </article>
         </div>
      </div>
   </div>
</div>
@endsection