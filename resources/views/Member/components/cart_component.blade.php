<div class="hero-wrap hero-bread" style="background-image: url('/imgs/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Giỏ hàng</span></p>
                <h1 class="mb-0 bread">Giỏ hàng của tôi</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list del-cart" data-url="{{route('delCart')}}">
                    <table class="table update-cart" data-url="{{route('updatecart')}}">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>#</th>
                                <th>Hình ảnh</th>
                                <th>Sản phẩm</th>
                                <th>Đơn giá</th>
                                <th width="5%">Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                            $total = 0;
                            @endphp
                            @foreach($list as $pro_id => $item)
                            <tr class="text-center">
                                <td class="pro_id">
                                    <h5>{{$pro_id}}</h5>
                                </td>
                                <td class="image-prod">
                                    <div class="img" style="background-image:url('/imgs/product-3.jpg');"></div>
                                </td>

                                <td class="product-name">
                                    <h4>{{$item['name']}}</h4>
                                </td>

                                <td class="price">{{$item['price']}}</td>

                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input type="number" name="quantity" class="quantity form-control input-number" value="{{$item['quantity']}}" min="1">
                                    </div>
                                </td>

                                <td class="subtotal">{{$item['price'] * $item['quantity']}}</td>
                                <td>
                                    <a href="" data-id={{$pro_id}} class="btn btn-primary updateCartQuantity">Cập nhật</a>
                                    <a href="" data-id={{$pro_id}} class="btn btn-danger delProCart">Xóa</a>
                                </td>
                            </tr><!-- END TR-->
                            @php
                            $total += ($item['price'] * $item['quantity']);
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">

            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <p class="d-flex total-price">
                        <span>Tổng tiền</span>
                        <span>@php echo $total @endphp</span>
                    </p>
                </div>
                <p><a href="{{route('checkout')}}" class="btn btn-primary py-3 px-4">Thanh Toán</a></p>
            </div>
        </div>
    </div>
</section>