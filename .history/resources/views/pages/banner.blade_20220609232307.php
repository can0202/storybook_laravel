<div class="swiper mySwiper">
   <div class="swiper-wrapper">
      @foreach($story as $key => $value)
      <div class="swiper-slide">
         <div class="info-img position-relative">
            <div class="avatar d-flex align-items-center">
               <img src="{{asset('img/icon-avatar.png')}}" alt="">
               <h3>Admin</h3>
            </div>
            <img class="img-main w-100" src="{{asset('uploads/story/'.$value->image)}}" alt="">
            <div class="overlay" style="background-color:rgba(26, 24, 24, 0)"></div>
            <div class="info-text">
               <a href="{{url('xem-truyen/'.$value->slug)}}">
                  <h2>{{$value->title}}</h2>
               </a>
            </div>
         </div>
      </div>
      @endforeach

   </div>
   <div class="swiper-button-next"></div>
   <div class="swiper-button-prev"></div>
</div>