@extends('Frontend.Master.master')
@section('content')
<body style="width:100%">
    <div class="container si">
     {{-- <h1 style="font-size: 21px !important; margin:10px;">Đăng nhập</h1> --}}
     <table class="shadow cor pb-5" cellspacing="0" cellpadding="6" style="width:100%;">
        <tbody><tr>
            <td style="width: 50%;">
                <div id="login_title" style="padding: 10px 0px 10px 10px;
                font-size: 10px;
                 color: rgb(88, 88, 88);"><h2>Thông tin khách hàng đăng nhập hệ thống</h2></div>
                <input type="hidden" name="login" id="login" value="yes">
                <form action="{{URL::to('/login-cus ')}}" method="post">
                    {{ csrf_field() }}
                <table cellpadding="5" cellspacing="0" width="80%">
                    <tbody>

                        <tr>
                            <td>Tên Đăng Nhập</td>
                        <td><input class="form-control" required type="text" size="25" name="name_cus" id=""></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu</td>
                        <td><input  class="form-control" type="password" required size="25" name="password_cus" id="password"></td>
                    </tr>
                     <tr>
                        <td>
                            <div style="position: relative;">
                                <input type="submit" value="Đăng nhập" class="btn btn-danger">
                            </div>
                        </td>
                    </tr>
                </tbody></table>
            </form>

            </td>
            <td width="10px">&nbsp;</td>
            <td valign="top" style="line-height: 30px;">


                <div style="padding: 5px 0px 10px; font-size: 13px; color: rgb(88, 88, 88);"></div>
                Đăng ký là thành viên để hưởng nhiều lợi ích và đặt mua hàng dễ dàng hơn.
                <p><a title="Click đăng ký tài khoản miễn phí" href="{{route('sigin')}}"style="color:#b00; font-weight: bold; text-decoration: none;">Đăng ký tài khoản</a></p>


            </td>
        </tr>

        </tbody></table>
    </div>

</body>
@endsection
