@extends('Frontend.Master.master')
@section('content')
<section id="banner" class="section-banner-area section-padding">
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <!-- left side single banner -->
                    <div class="single-banner">
                        <a href="#" class="b-img"><img src="{{asset('site/img/slider-img/slide_show1.jpg')}}" alt="">
                            <span class="watch">Channel</span>
                            <h2 class="arrival">Sản Phẩm Mới</h2>
                        </a>
                    </div>
                    <!-- End left side single banner -->
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <!-- Right side banner start -->
                    <div class="single-banner-right">
                        <div class="single-banner-top">
                            <a href="#" class="b-img"><img src="{{asset('site/img/slider-img/slshow2.jpg')}}" alt="">
                                <span class="brand">Mẫu Mã Mới</span>
                                <h2 class="col">Bộ Sưu Tập 2016</h2>
                            </a>
                        </div>
                        <div class="single-banner-bottom">
                            <a href="#" class="b-img"><img src="img/banner/bn3.jpg" alt="">
                                <span class="bag">Hand bags for men’s</span>
                                <h2 class="sale-1"><span class="sale-off">sale off</span><br>up to 40%</h2>
                            </a>
                        </div>
                    </div>
                    <!-- End right side banner -->
                </div>
            </div>
        </div>
    </div>
</section>
     <section id="new-arrivals" class="section-new-arrivals home1">
        <div class="new-arrival-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!--Product new arrivals title -->
                        <div class="section-title text-center text-uppercase">
                            <h2 class="n-arrival"><span>SẢN PHẨM CỦA CHÚNG TÔI</span></h2>
                        </div>
                        <!-- End arrivals title -->
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="new-arrival-content row">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="all">
                                    @foreach ($product as $key )
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 s-item">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                               <a class="primary-img" href="{{route('detail',['id'=>$key->id])}}"><img src="{{url('/')}}/site/img/products/{{$key->img}}" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="{{route('detail',['id'=>$key->id])}}"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="{{route('detail',['id'=>$key->id])}}">{{$key->name}}</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
	                                                    <span class="n-amt">{{number_format($key->price,0,"",",")}} VND</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        {{ $product->links() }}
                      </div>
                </div>
            </div>
        </div>
    </section>
<div class="section-brand-logo-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <hr>
                <!-- start brand logo image -->
                <div class="logo-carousel owl-carousel section-padding">
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/1.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/2.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/3.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/4.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/5.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/1.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/2.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/3.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/4.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/5.png" alt="brand-logo" /></a>
                    </div>
                </div>
                <!--End brand logo image -->
            </div>
        </div>
    </div>
</div>

@endsection
