@extends('Member.layouts')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-5 text-center">
            <ul class="product-category">
                <li><a href="#">{{$item->category_name}}</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3 ftco-animate">
            @foreach($data as $item)
            <div class="product">
                <a href="#" class="img-prod"><img class="img-fluid" src="{{asset('imgs/product-1.jpg')}}" alt="Colorlib Template">

                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">{{$item->name}}</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price"><span class="mr-2 ">{{$item->price}}</span></p>
                        </div>
                    </div>
                    <div class="bottom-area d-flex px-3">
                        <div class="m-auto d-flex">
                            <a href="{{asset('/member/add-to-cart/'.$item->pro_id)}}" data-url="{{asset('/member/add-to-cart/'.$item->pro_id)}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
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
            @endforeach
        </div>
    </div>
</div>
@endsection