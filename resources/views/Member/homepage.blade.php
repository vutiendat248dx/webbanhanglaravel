@extends('Member.layouts')
@section('content')
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('/imgs/bg_1.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">Chúng tôi phục vụ rau tươi &amp; trái cây</h1>
                        <h2 class="subheading mb-4">Chúng tôi cung cấp rau hữu cơ &amp; trái cây</h2>
                        <p><a href="#" class="btn btn-primary">
                                Xem chi tiết</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url('/imgs/bg_2.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-sm-12 ftco-animate text-center">
                        <h1 class="mb-2">100% Tươi &amp; Thức ăn hữu cơ</h1>
                        <h2 class="subheading mb-4">Chúng tôi cung cấp rau hữu cơ &amp; trái cây</h2>
                        <p><a href="#" class="btn btn-primary">Xem chi tiết</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">MIỄN PHÍ VẬN CHUYỂN</h3>
                        <span>ĐẶT HÀNG TRÊN $100</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Đổi mới</h3>
                        <span>Gói sản phẩm tốt</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-award"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">
                            Chất lượng cao</h3>
                        <span>Chất lượng sản phẩm</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Hỗ trợ</h3>
                        <span>24/7 nhận hỗ trợ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 order-md-last align-items-stretch d-flex">
                        <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url('/imgs/category.jpg');">
                            <div class="text text-center">
                                <h2>Vegetables</h2>
                                <p>Bảo vệ sức khỏe mọi nhà</p>
                                <p><a href="#" class="btn btn-primary">Mua ngay</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        @foreach($list as $item)
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url('/imgs/category-1.jpg');">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="{{asset('/member/productbycategory/'.$item->cate_id)}}">{{$item->category_name}}</a></h2>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">
                    Sản phẩm nổi bật</span>
                <h2 class="mb-4">Sản phẩm của chúng tôi</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($list as $product)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{asset('$product->images')}}">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{$product->name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 ">{{$product->price}}</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="{{asset('/member/add-to-cart/'.$product->pro_id)}}" data-url="{{asset('/member/add-to-cart/'.$product->pro_id)}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="ftco-section img" style="background-image: url('/imgs/bg_3.jpg');">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                <span class="subheading">
                    Giá tốt nhất cho bạn</span>
                <h2 class="mb-4">Deal trong ngày</h2>
                <h3><a href="#">Spinach</a></h3>
                <span class="price">$10 <a href="#">now $5 only</a></span>
                <div id="timer" class="d-flex mt-5">
                    <div class="time" id="days"></div>
                    <div class="time pl-3" id="hours"></div>
                    <div class="time pl-3" id="minutes"></div>
                    <div class="time pl-3" id="seconds"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="{{asset('imgs/partner-1.png')}}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="{{asset('imgs/partner-2.png')}}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="{{asset('imgs/partner-3.png')}}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="{{asset('imgs/partner-4.png')}}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="{{asset('imgs/partner-5.png')}}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
        </div>
    </div>
</section>

@endsection