<div class="sidebar">
    <div class="story-desc">
        <h3 class="title-main">Type Stories</h3>
        <ul class="list-type">
            @foreach($category as $key => $value)
            <li>
                <a href="{{url('danh-muc/'.$value->slug)}}">{{$value->title}}</a>
            </li>
            @endforeach

        </ul>
    </div>
    <div class="story-desc">
        <h3 class="title-main">Hot Stories</h3>
        <ul class="list-hot">
            @foreach($hotStory as $key => $value)
            <li>
                <span></span>
                <a href="">{{$value->title}}</a>
            </li>
            @endforeach

        </ul>
    </div>
</div>