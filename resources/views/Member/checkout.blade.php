@extends('Member.layouts')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('/imgs/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Thanh toán</span></p>
                <h1 class="mb-0 bread">Thanh toán</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 ftco-animate">
                <form method="POST" action="{{route('memberorder')}}" class="billing-form">
                    @csrf
                    <h3 class="mb-4 billing-heading">Chi Tiết Hóa Đơn</h3>
                    <div class="row align-items-end">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="fullname">Họ tên</label>
                                <input type="text" class="form-control" value="{{$list->fullname}}">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <input type="text" name="address" value="{{$list->address}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="phone">Số điện thoại</label>
                                <input type="text" class="form-control" value="{{$list->phonenumber}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" value="{{$list->email}}">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-xl-5">
                <div class="row mt-5 pt-3">
                    <div class="col-md-12 d-flex mb-5">
                        <div class="cart-detail cart-total p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Cart Total</h3>
                            @php
                            $total = 0;
                            @endphp
                            @foreach($listcart as $item)
                            <p class="d-flex">
                                <span>{{$item['name']}}</span>
                                <span>{{$item['quantity']}}</span>
                                <span>{{$item['price'] *$item['quantity'] }}</span>
                            </p>
                            @php
                            $total += ($item['price'] * $item['quantity']);
                            @endphp
                            @endforeach
                            <hr>
                            <p class="d-flex total-price">
                                <span>Tổng tiền</span>
                                <span>@php echo $total @endphp</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="cart-detail p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Phương thức thanh toán</h3>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <input class="form-check-input" type="checkbox" name="payment_method" value="0" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Thanh toán khi nhận hàng
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <input class="form-check-input" type="checkbox" name="payment_method" value="1" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Chuyển khoản qua ngân hàng
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <p> <button type="submit" class="btn btn-primary">Thanh toán</button></p>
                            <input type="hidden" name="bill" class="form-control" value="@php echo $total @endphp">
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>
@endsection