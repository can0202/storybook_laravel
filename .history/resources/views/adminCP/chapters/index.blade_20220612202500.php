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
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th rowspan="1" colspan="1">ID</th>
                                        <th rowspan="1" colspan="1">Title</th>
                                        <th rowspan="1" colspan="1">Slug</th>
                                        <th rowspan="1" colspan="1">Description</th>
                                        <th rowspan="1" colspan="1">Content</th>
                                        <th rowspan="1" colspan="1">Story</th>
                                        <th rowspan="1" colspan="1">Status</th>
                                        <th rowspan="1" colspan="1">Manager</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list_chapter as $key => $value)
                                    <tr class="odd">
                                        <td class="sorting_1">{{ $key + 1 }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->slug }}</td>
                                        <td>{!! substr($value->description, 0, 100) !!}...</td>
                                        <td>{!! substr($value->content, 0, 100) !!}...</td>
                                        <td>{{ $value->story->title }}</td>
                                        <td>
                                            @if( $value->status == 0)
                                            <span class="text text-success">Activated</span>
                                            @else
                                            <span class="text text-danger">No Activated</span>
                                            @endif
                                        </td>
                                        <td style="padding:2px">
                                            <a href="{{ route('chapter.edit', ['chapter' => $value->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('chapter.destroy', ['chapter'=>$value->id]) }}" method="POST">
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
                                <!-- panigation -->
                                <div class="panigation">
                                    {{ $list_chapter->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection