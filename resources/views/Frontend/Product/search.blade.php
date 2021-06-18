    <!--End Breadcumb area -->
    @extends('Frontend.Master.master')
    @section('content')
    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcumb">
                        <p class="b-men"><a href="{{URL::to('/Home')}}"><i class="fa fa-home"></i> <span class="home" >Trang Chủ</span> <i class="fa fa-angle-right"></i></a>Cửa Hàng</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-product-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3 col-sm-4">
                    <div class="shop-sidebar" style="padding-top:40px;text-align:center">
                        <div class="shop-single-sidebar shop-category">
                            <h2 style="font-size:large">Danh Mục</h2>
                            @foreach ($cate as $key )
                            <ul>
                                <li><a href="{{URL::to('/danh-muc-san-pham/'.$key->id)}}">{{$key->name}}</a>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                     <div class="shop-single-sidebar price-filter">
                        <h2 class="wedget-title">Lọc Giá</h2>
                   <form action="{{route('search')}}" method="GET">
                   {{ csrf_field() }}
                   <input type="text"  class="btn btn-default btn-sm"  name="keywords" >
                   <input class="btn btn-primary btn-sm" type="submit" name="search" value="Tìm Kiếm">
                   </form>
                   {{-- <form action="{{URL::to('/search_value')}}" method="GET">
                    {{ csrf_field() }}
                    <input
                    class="search-input" placeholder="Enter your search term..." type="text"
                    @if (Session::has('keywords'))
                        value="{{Session::get('keywords') }}"
                    @else
                        value=""
                    @endif
                    name="find">
                    <input class="btn btn-primary btn-sm" type="submit" value="Tìm Kiếm">
                    </form> --}}
                    </div>

                </div>

                <div class="col-xs-12 col-md-9 col-sm-8">
                    <div class="section-title text-center text-uppercase">
                        <h2 class="n-arrival"><span>Kết Quả Tìm Kiếm</span></h2>
                    </div>
                      <div class="tab-content-grid">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="grid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                        <div class="new-arrival-content row">
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade in active" id="all">
                                                    @foreach ( $search_pr as $key )
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 s-item">
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
                                        {{ $search_pr->links() }}
                                      </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- <div class="col-md-12">
                        <div class="page-navigation">
                            <ul class="navi">
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li class="2">
                                    <a href="#">2</a>
                                </li>
                                <li class="3">
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a class="double-angle" href="#">
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    @endsection
