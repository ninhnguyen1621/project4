@extends('Frontend.Master.master')
@section('content')

<body style="width:100%">
    <div class="container si" >
        <h1 style="font-size: 21px !important; margin: 10px;">Đăng ký tài khoản</h1>
        <form method="POST" action="{{URL::to('/add-customer')}}">
            {{{ csrf_field() }}}
           <fieldset style="border: none;" class="shadow word">
               <div class=""></div>
               <table width="100%" id="register">
                   <tbody><tr>
                       <td valign="top">

                           <table cellpadding="4" cellspacing="0" id="tb_register" style="width: 100%;">
                               <tbody>
                                <tr>
                                    <td width="150px">Họ Tên</td>
                                    <td>
                                        <input type="text" name="name" id="email" class="boxInput" size="30" value="">
                                    </td>
                                    </tr>
                                   <tr>
                                   <td width="150px">Địa chỉ Email</td>
                                   <td>
                                       <input type="text" name="email" id="email" class="boxInput" size="30" value="">
                                   </td>
                                   </tr>
                                   <tr>
                                    <td width="150px">Số Điện Thoại</td>
                                    <td>
                                        <input type="text" name="phone" class="boxInput" size="30" >
                                    </td>
                                    </tr>
                               <tr>
                                   <td>Mật khẩu</td>
                                   <td><input type="password"name="password" id="password" class="boxInput" size="30">
                               </tr>
                               <tr>
                               </tr>

                               <tr>
                                   <td></td>

                               </tr>

                               <tr>
                                   <td></td>
                                   <td>
                                       <input type="hidden" name="return_url" value="https://hoangphatvn.vn/dang-ky">
                                       <input type="hidden" name="secure_key" value="
                            ">
                                       <input type="submit" value="Đăng ký" class="btn btn-danger">
                                   </td>
                               </tr>
                           </tbody></table>
                       </td>

                   </tr>
               </tbody></table></fieldset>
       </form>
       </div>
</body>
@endsection

