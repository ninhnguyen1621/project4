
<div class="header-area lg-light-shadow header-transparent home-v1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-inner clearfix">
                    <div class="col-md-2 col-sm-3 col-xs-12">
                        <!--header logo -->
                        <div class="logo">
                            <a href="{{URL::to('/Home')}}"><img src="img/logo/logo1.png" alt="logo"></a>
                        </div>
                    </div>
                    <!--end Header logo -->
                    <div class="col-md-10 col-sm-6">
                        <div class="header-right user-info">
                            <ul>
                                {{-- <li>
                                    <a href="#" class="cart-toggler search-icon"><i class="fa fa-search"></i></a>
                                    <div class="header-bottom-search">
                                        <form method="POST">
                                            <div>
                                                <input value="" placeholder="Search" autocomplete="off" type="text">
                                                <button class="btn-search" type="submit">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </li> --}}
                                <li class="header-cart-area">
                                    <a href="{{URL::to('/gio-hang')}}">
                                        <span><i class="fa fa-shopping-cart"></i></span>
                                        <span class="cart-inner"><b>Giỏ Hàng</b></span>
                                    </a>
                                </li>
                                <?php
                                 $customer_id=session()->get('id');
                                 if($customer_id!=Null){

                                ?>
                                <li><a href="{{URL::to('/logoutcheck-out')}}"><i class="fas fa-sign-out-alt"></i>Đăng Xuất</a></li>
                                <?php
                                 }else{
                                     # code...
                                ?>
                               <li><a  href="{{URL::to('/logincheck-out')}}"><i class="fas fa-sign-in-alt"></i>Đăng Nhập</a></li>
                                <?php
                                }
                                ?>

                            </ul>

                        </div>
                        <!-- start menu area -->
                        <div class="main-menu-area hidden-sm hidden-xs pull-right">
                            <!-- nav menu start -->
                            <nav class="menu text-uppercase">
                                <ul>
                                    <li class="active"><a href="{{URL::to('/Home')}}"><span>Trang Chủ</span></a>
                                    </li>
                                    <li><a href="{{URL::to('/Home/DanhMuc')}}" class="mega-active">Cửa Hàng</a>
                                    <li><a href="{{URL::to('/baiviet')}}">Bài Viết</a></li>
                                    <li><a href="shop.html">Liên Hệ</a></li>

                                </ul>
                            </nav>
                            <!-- end nav menu -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--header area end -->
<!-- slider area start -->
<div class="slider-area ">
    <div class="slider-content">
        <img src="img/slider-img/grid-baner.jpg" alt="baner">
        <form action="{{URL::to('/searching')}}" method="GET">
            {{ csrf_field() }}
               <div class="search" style="padding-left:800px">
                   <input type="text"  class="btn btn-default btn-sm"  name="keywords" size="40"  >
                   <input class="btn btn-primary btn-sm" type="submit" name="search" value="Tìm Kiếm">
                </div>
        </form>
    </div>

</div>
<!-- slider area end-->
<!-- Breadcumb area start -->
