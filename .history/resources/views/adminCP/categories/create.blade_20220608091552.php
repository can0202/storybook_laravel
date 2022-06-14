@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">{{ __('Add New Category') }}</div>
            <!-- Display Error -->
            @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
            @endif
            <div class="card-body">
               <!-- thông báo khi submit form -->
               @if (session('status'))
               <div class="alert alert-success" role="alert">
                  {{ session('status') }}
               </div>
               @endif

               <form method="POST" action="{{route('danhmuc.store')}}">
                  @csrf
                  <div class="form-group">
                     <label for="inputAddress">Tiêu đề danh mục</label>
                     <input type="text" value="{{old('tendanhmuc')}}" onkeyup="ChangeToSlug()" name="tendanhmuc" class="form-control" id="slug" placeholder="Tiêu đề">
                  </div>
                  <div class="form-group">
                     <label>Đường dẫn danh mục</label>
                     <input type="text" value="{{old('slug_danhmuc')}}" name="slug_danhmuc" class="form-control" id="convert_slug" placeholder="Đường dẫn truyện">
                  </div>
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Mô tả danh mục</label>
                     <textarea class="form-control" name="mota" id="exampleFormControlTextarea1" rows="3">{{old('mota')}}</textarea>
                  </div>
                  <div class="form-group">
                     <label for="inputState">Kích hoạt</label>
                     <select id="inputState" name="kichhoat" class="form-control">
                        <option value="0" selected>Kích hoạt</option>
                        <option value="1">Không kích hoạt</option>
                     </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Thêm mới</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection('content')