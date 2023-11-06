@extends('Admin.layouts')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header border-0">
                    <div class="col-12">
                        <a class="btn btn-primary" type="submit" href="{{route('showaddproduct')}}">Thêm sản phẩm</a>
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
                                    <th>Tên Sản Phẩm</th>
                                    <th>Tên Danh Mục</th>
                                    <th>Đơn giá </th>
                                    <th>Số lượng</th>
                                    <th>Hình Ảnh</th>
                                    <th>Mô tả</th>
                                </tr>
                                @foreach($list as $product)
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->cate_id}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->amounts}}</td>

                                    <td>
                                        @if($product->images)
                                        <img src="{{asset('images')}}/{{$product->images}}" style="height: 50px;width:50px;">
                                        @else
                                        <span>No image found!</span>
                                        @endif
                                    </td>
                                    <td>{{$product->description}}</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{asset('product/showedit/'.$product->pro_id)}}">Sửa</a>
                                                <a class="dropdown-item" href="{{asset('product/deletepro/'.$product->pro_id)}}">Xóa</a>
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