@extends('layouts.app')
@section('content')
<div class="container-fluid">

   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">List Story</h6>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
               <div class="row">
                  <div class="col-sm-12 col-md-6">
                     <div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                              <option value="10">10</option>
                              <option value="25">25</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                           </select> entries</label></div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                     <div id="dataTable_filter" class="dataTables_filter text-right"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                        <thead>
                           <tr>
                              <th rowspan="1" colspan="1">ID</th>
                              <th rowspan="1" colspan="1">Title</th>
                              <th rowspan="1" colspan="1">Slug</th>
                              <th rowspan="1" colspan="1">Description</th>
                              <th rowspan="1" colspan="1">Author</th>
                              <th rowspan="1" colspan="1">Tag</th>
                              <th rowspan="1" colspan="1">Image</th>
                              <th rowspan="1" colspan="1">Category</th>
                              <th rowspan="1" colspan="1">Status</th>
                              <th rowspan="1" colspan="1">Manager</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($list_story as $key => $value)
                           <tr class="odd">
                              <td class="sorting_1">{{ $key + 1 }}</td>
                              <td>{{ $value->title }}</td>
                              <td>{{ $value->slug }}</td>
                              <td>{{ $value->description }}</td>
                              <td>{{ $value->author }}</td>
                              <td>{{ $value->tag_story }}</td>
                              <td>
                                 <img src="{{asset('/uploads/story'.$value->image)}}" alt="">
                              </td>
                              <td></td>
                              <td>
                                 @if( $value->status == 0)
                                 <span class="text text-success">Activated</span>
                                 @else
                                 <span class="text text-danger">No Activated</span>
                                 @endif
                              </td>
                              <td class="d-flex justify-content-between">
                                 <a href="{{ route('story.edit', ['story' => $value->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                 <form action="{{ route('story.destroy', ['story'=>$value->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-sm">Delete</button>
                                 </form>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12 col-md-12">
                     <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                        <ul class="pagination justify-content-end">
                           <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                           <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                           <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                           <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                           <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                           <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                           <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                           <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</div>
@endsection