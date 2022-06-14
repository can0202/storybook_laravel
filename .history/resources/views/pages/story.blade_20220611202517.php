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
         <div class="story-banner">
            <h1>IKEMEN JOSHI TO JOSOU DANSHI</h1>
         </div>
         <div class="story-info">
            <div class="row">
               <div class="col-sm-4">
                  <img src="{{asset('uploads/story/mat-the-cung-ban-gai-zombie16.jpg')}}" alt="">
               </div>
               <div class="col-sm-8">

               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-3"></div>
   </div>
</div>
@endsection