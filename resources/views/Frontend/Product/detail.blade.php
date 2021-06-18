    <!--End Breadcumb area -->
    @extends('Frontend.Master.master')
    @section('content')


<div class="breadcumb-area detail">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcumb">
                    <p class="b-men">
                        <a href="#"><i class="fa fa-home"></i>
                            <span class="home">Home</span>
                        </a>
                        <i class="fa fa-angle-right"></i>
                          <a href="#">
                            <span class="home"> Men </span>
                        </a>
                        <i class="fa fa-angle-right"></i>
                        <span class="s-cart">{{$product->name}}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Breadcumb area -->
<div class="shop-product-area detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-xs-12">
                <div class="shop-products">
                    <div class="single-item-detail clearfix">
                        <div class="product-thumbnail">
                            <div class="single-thumbnail-big">
                                <a href="" data-lightbox="http://localhost:8000/blog/public/site/img/products/{{$product->img}}" data-title="High Neck Bodycon Dress">
                                    <img src="http://localhost:8000/blog/public/site/img/products/{{$product->img}}" alt="">
                                </a>
                            </div>
                            <div class="single-thumbnail-small row">
                                <div class="1 single-thumb" data-slick-index="1">
                                    <img src="http://localhost:8000/blog/public/site/img/products/{{$product->img}}" alt="thumb1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-xs-12">
                <form method="post">
                    @csrf
                    <div class="detail-product-info">
                        <p class="detail-product-title">
                            <a>{{$product->name}}</a>
                        </p>
                        <div class="detail-product-price-area">
                            <span class="price">
                                <span class="n-amt" name="price">{{number_format($product->price)}} VNĐ</span>
                            </span>

                        </div>
                        <div class="p-content clear">
                            <p class="content">
                                <br>Mô Tả: {!!$product->describe!!}<br>
                            </p>
                        </div>
                        <div class="cart-quantity">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="qty" value="1">
                            </div>
                        </div>
                        <div class="detail-choices">
                            <div class="choice-icon">
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <button type="submit" class="btn btn-dark">Thêm giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
