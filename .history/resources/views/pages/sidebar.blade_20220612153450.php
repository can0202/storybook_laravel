<div class="sidebar">
    <div class="story-desc">
        <h3 class="title-main">Type Stories</h3>
        <ul class="list-hot">
            @foreach($category as $key => $value)
            <li>
                <a href="">{{$value->title}}</a>
            </li>
            @endforeach

        </ul>
    </div>
</div>