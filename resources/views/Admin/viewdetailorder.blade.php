@extends('Admin.layouts')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-hover">
                            <thead>
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Số lượng </th>
                                    <th>Đơn giá</th>
                                    <th>Thành tiền</th>
                                </tr>
                                @foreach($list as $item)
                                <tr>
                                    <td>{{$item->product_id}}</td>
                                    <td>
                                        <img src="{{asset('images')}}/{{$item->images}}" style="height: 50px;width:50px;">
                                    </td>
                                    <td>{{$item->quantity}}</td>
                                    <td>{{$item->total_price}}</td>
                                    <td>{{$item->quantity * $item->total_price }}</td>
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