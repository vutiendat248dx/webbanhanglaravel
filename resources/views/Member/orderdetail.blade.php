@extends('Member.layouts')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('/imgs/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Chi tiết</span></p>
                <h1 class="mb-0 bread">Chi tiết đơn hàng </h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list ">
                    <table class="table ">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>Mã đơn hàng</th>
                                <th>Hình ảnh</th>
                                <th>Sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($list as $item)
                            <tr class="text-center">
                                <td class="order_id">
                                    <h5>{{$item->orderId}}</h5>
                                </td>
                                <td class="image-prod">
                                    <div class="img" style="background-image:url('/imgs/product-3.jpg');"></div>
                                </td>

                                <td class="product-name">
                                    <h4>{{$item->name}}</h4>
                                </td>

                                <td class="price">
                                    {{$item->total_price}}
                                </td>

                                <td class="quantity">
                                    {{$item->quantity}}
                                </td>
                                <td class="total">
                                    {{$item->quantity * $item->total_price}}
                                </td>
                                <td class="total">
                                    {{$item->status}}
                                </td>

                            </tr><!-- END TR-->
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection