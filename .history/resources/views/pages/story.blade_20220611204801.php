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
      <div class="col-sm-9">
         <div class="story-info">
            <div class="row">
               <div class="col-sm-4">
                  <div class="img-story">
                     <img src="{{asset('uploads/story/mat-the-cung-ban-gai-zombie16.jpg')}}" alt="">
                  </div>
               </div>
               <div class="col-sm-8">
                  <h1>IKEMEN JOSHI TO JOSOU DANSHI</h1>
                  <ul>
                     <li><i class="ion-person"></i> Author: Admin</li>
                     <li><i class="ion-wifi"></i> Status: Active</li>
                     <li><i class="ion-pricetag"></i> Type: <a href="#">Kiếm hiệp</a>, <a href="#">Tiên hiệp</a></li>
                     <li><i class="ion-information-circled"></i> Chapter number: 200</li>
                     <li><button class="btn btn-primary">Read Online</button></li>
                  </ul>
               </div>
            </div>
            <div class="story-desc">
               <h2>Description</h2>
               <p>Bộ truyện tranh Đưa Mami Về Nhà hay tên gọi khác là "Một Thai Hai Bảo : Đưa Mami Về Nhà !" có nội dung: "Tại sao 5 năm trước rơi vào tay hắn, 5 năm sau cũng là hắn vậy?!" Bạch Sơ Hiểu tức giận, nhấc cổ áo của Giang Thừa Dục, "Anh hại tôi đau khổ nhiều năm như vậy, định đền bù như thế nào?" Giang Thừa Dục cười tà mị, trở tay ôm cô: "Hai baby này thêm một đời yên vui có được không?</p>
            </div>
            <div class="story-desc">
               <h2>Table of contents</h2>
               <ul>
                  <li><a href="#">Chương 1</a></li>
                  <li><a href="#">Chương 1</a></li>
                  <li><a href="#">Chương 1</a></li>
                  <li><a href="#">Chương 1</a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="col-sm-3"></div>
   </div>
</div>
@endsection