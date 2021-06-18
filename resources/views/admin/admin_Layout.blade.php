<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Trang Chủ</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<base href="{{asset('frontend/')}}/">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/stl.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="{{asset('frontend/fontawesome_icons/fontawesome-free-5.13.0-web/css/all.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script>
    CKEDITOR.replace('mota');
</script>

<!--//webfonts-->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <div class="header-inner clearfix">
        <div class="col-md-2 col-sm-3 col-xs-12">
            <!--header logo -->
            <div class="logo">
                <a href="{{URL::to('/Home')}}"><img src="img/logo/logo1.png" alt="logo"></a>
            </div>
        </div>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div class="col-md-12 home_style">
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation" id="myDIV">
            <ul class="sidebar-menu" >
                <h4 class="admin-text">Admin: <span style="font-size: small"> <?php
                    $name=session()->get('name');
                    if ($name) {
                        echo $name;
                    }
                  ?></span></h4>

                </li>

                <li class="sub active" >
                    <a  href="{{URL::to('/admin/dashboard')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Tổng Quan</span>
                    </a>
                </li>

                <li  class="sub" >
                    <a href="{{URL::to('/all-category-product')}}">
                        <i class="fa fa-book"></i>
                        <span>Danh Mục Sản Phẩm</span>
                    </a>
                </li>
                <li class="sub" >
                    <a  href="{{URL::to('/all-Product')}}">
                        <i class="fa fa-bullhorn"></i>
                        <span>Sản Phẩm </span>
                    </a>
                </li>
                <li class="sub" >
                    <a  href="{{URL::to('/orders')}}">
                        <i class="fas fa-shopping-basket"></i>
                        <span>Đơn Hàng </span>
                    </a>
                </li>
                <li class="sub" >
                    <a  href="{{URL::to('/all-nf')}}">
                        <i class="fas fa-newspaper"></i>
                        <span>Bài Viết </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('logn_out')}}">
                        <i class="fa fa-sign-out-alt"></i>
                        <span> Đăng Xuất</span>
                    </a>
                </li>

            </ul>
         </div>
        <!-- sidebar menu end-->
    </div>

</aside>
<section id="main-content">
	<section class="wrapper">
        @include('flash-messenge')
		@yield('admin_content')

	</section>
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->
<script>
	</script>
<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',

			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
    <script>
    </script>
	<!-- <//calendar -->
</body>
</html>

