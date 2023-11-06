@extends('Admin.layouts')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header border-0">
                    <div class="col-12">
                        <a class="btn btn-primary" type="submit" href="{{route('showcategory')}}">Thêm danh mục</a>
                    </div>
                    <div class="container">
                        <div class="row">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-hover">
                            <thead>
                                <tr>
                                    <th width="50%">Tên Danh Mục</th>
                                    <th width="10%">Khởi tạo</th>
                                </tr>
                                @foreach($list as $category )
                                <tr>

                                    <td>{{$category->category_name}}</td>
                                    <td>{{$category->created_at}}</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{asset('category/edit/'.$category->id)}}">Sửa</a>
                                                <a class="dropdown-item" href="{{asset('category/delete/'.$category->id)}}">Xóa</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </thead>

                            <tbody>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection