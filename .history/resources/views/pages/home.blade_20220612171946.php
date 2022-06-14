@extends('../welcome')
@section('banner')
@include('pages.banner')
@endsection
@section('content')
<div class="content mt-5 mb-5">
    <h3 class="title-main">Top Rated Stories</h3>
    <div class="all-story">
        @foreach($story as $key => $value)
        <div class="info-img position-relative">
            <div class="icon_hot">
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
    <!-- panigation -->
    {{ $story->links() }}
</div>
@endsection