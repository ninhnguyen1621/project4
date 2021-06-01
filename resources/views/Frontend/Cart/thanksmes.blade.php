    <!--End Breadcumb area -->
    @extends('Frontend.Master.master')
    @section('content')
    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcumb">
                        <p class="b-men"><a href="{{URL::to('/Home')}}"><i class="fa fa-home"></i> <span class="home">Danh Mục</span> <i class="fa fa-angle-right"></i></a>Cửa Hàng</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-product-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3 col-sm-4">
                    <div class="shop-sidebar">
                        <div class="shop-single-sidebar shop-category">
                            <h2>Danh Mục</h2>
                            @foreach ($Cate as $key )
                            <ul>
                                <li><a href="{{URL::to('/danh-muc-san-pham/'.$key->id)}}">{{$key->name}}</a>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                    <div class="shop-single-sidebar price-filter">
                        <h2 class="wedget-title">Lọc Giá</h2>
                   <form action="{{URL::to('/search_value')}}" method="GET">
                   {{ csrf_field() }}
                   <input type="text"  class="btn btn-default btn-sm"  name="keywords" >
                   <input class="btn btn-primary btn-sm" type="submit" name="search" value="Tìm Kiếm">
                   </form>
                    </div>
                </div>
                <div class="col-xs-12 col-md-9 col-sm-8">
                    <div class="section-title text-center text-uppercase">
                        <h2 class="n-arrival"><span>Cảm ơn bạn đã đặt hàng, shop sẽ liên lạc lại với bạn trong thời gian sơn nhất</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
