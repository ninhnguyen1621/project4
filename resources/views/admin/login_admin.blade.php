<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@include('flash-messenge')
<!DOCTYPE HTML>
<html>
<head>
<title>Login form</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="{{asset('admin/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--script-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
</head>
<body>
<div class="login">
<!--start-loginform-->
		<form name="login-form" class="login-form" action="{{route('dashboard')}}" method="post">
            @csrf
		    <div class="header">
                <?php
                   $message=session()->get('message');
                   if ($message) {
                     echo '<span style="color: red">'. $message.'</span>';
                      session()->put('message', null);
                   }
                 ?>
		    <h1>Đăng Nhập</h1>
		    </div>
		    <div class="content">
			<input type="email" name="email" class="input username" placeholder="Email" required="">
		    <input type="password" name="password"   class="input password" placeholder="Password" required="">
		    </div>
		    <div class="login_button" style="height: 150">
		    <input type="submit" name="submit" value="Đăng Nhập">
		    </div>
		</form>
<!--end login form-->
<!--side-icons-->
    <!--END side-icons-->
    <!--Side-icons-->

</div>
</body>
</html>
