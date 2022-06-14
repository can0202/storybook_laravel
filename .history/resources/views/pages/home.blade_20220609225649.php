@extends('../welcome')
@section('banner')
@include('pages.banner')
@section('content')
<div class="content mt-5 mb-5">
   <h3 class="title-main">Top Rated Stories</h3>
   <div class="all-story">
      <div class="info-img position-relative">
         <div class="icon ">
            <img src="{{asset('img/icon-hot.gif')}}" alt="">
         </div>
         <img class="img-main w-100" src="{{asset('uploads/story/the-gioi-hoan-my46.jpg')}}" alt="">
         <div class="story-text text-center">
            <a href="#">
               <h2>Thế giới hoàn mỹ</h2>
            </a>
         </div>
      </div>
      <div class="info-img position-relative">
         <div class="icon ">
            <img src="{{asset('img/icon-hot.gif')}}" alt="">
         </div>
         <img class="img-main w-100" src="{{asset('uploads/story/the-gioi-hoan-my46.jpg')}}" alt="">
         <div class="story-text text-center">
            <a href="#">
               <h2>Thế giới hoàn mỹ</h2>
            </a>
         </div>
      </div>
      <div class="info-img position-relative">
         <div class="icon ">
            <img src="{{asset('img/icon-hot.gif')}}" alt="">
         </div>
         <img class="img-main w-100" src="{{asset('uploads/story/the-gioi-hoan-my46.jpg')}}" alt="">
         <div class="story-text">
            <a href="#">
               <h2>Thế giới hoàn mỹ</h2>
            </a>
         </div>
      </div>
      <div class="info-img position-relative">
         <div class="icon ">
            <img src="{{asset('img/icon-hot.gif')}}" alt="">
         </div>
         <img class="img-main w-100" src="{{asset('uploads/story/the-gioi-hoan-my46.jpg')}}" alt="">
         <div class="story-text">
            <a href="#">
               <h2>Thế giới hoàn mỹ</h2>
            </a>
         </div>
      </div>
      <div class="info-img position-relative">
         <div class="icon ">
            <img src="{{asset('img/icon-hot.gif')}}" alt="">
         </div>
         <img class="img-main w-100" src="{{asset('uploads/story/the-gioi-hoan-my46.jpg')}}" alt="">
         <div class="story-text">
            <a href="#">
               <h2>Thế giới hoàn mỹ</h2>
            </a>
         </div>
      </div>
      <div class="info-img position-relative">
         <div class="icon ">
            <img src="{{asset('img/icon-hot.gif')}}" alt="">
         </div>
         <img class="img-main w-100" src="{{asset('uploads/story/the-gioi-hoan-my46.jpg')}}" alt="">
         <div class="story-text">
            <a href="#">
               <h2>Thế giới hoàn mỹ</h2>
            </a>
         </div>
      </div>
      <div class="info-img position-relative">
         <div class="icon ">
            <img src="{{asset('img/icon-hot.gif')}}" alt="">
         </div>
         <img class="img-main w-100" src="{{asset('uploads/story/the-gioi-hoan-my46.jpg')}}" alt="">
         <div class="story-text">
            <a href="#">
               <h2>Thế giới hoàn mỹ</h2>
            </a>
         </div>
      </div>
   </div>
</div>
@endsection