@extends('Frontend.Master.master')
@section('content')
<html>
    <div class="checkout-area chk-page">
        <div class="container">
            <div class="row">
                <div class="breadcumb">
                    <p class="b-men"><a href="{{URL::to('/Home')}}"><i class="fa fa-home"></i> <span class="home">Trang Chủ</span> <i class="fa fa-angle-right"></i></a>Giỏ Hàng <i class="fa fa-angle-right"></i></a>Đặt Hàng</p>

                </div>
 <div class="col-md-9">
    <form action="{{route('order-place')}}" method="POST">
        {{ csrf_field() }}
       <div class="panel-group information-area" id="checkout-progress">
         <div class="panel panel-default information">
            <div class="panel-heading" >
                <a class="btn bill-info text-uppercase" data-toggle="collapse" " ><span>1</span>ĐIỀN THÔNG TIN ĐƠN HÀNG</a>
             </div>
               <div id="bill-info" class="panel-collapse detail-content">
              <div class="panel-body">
               <div class="bill-information">
          {{-- <form action="{{route('save-buyer')}}" method="POST">
                {{ csrf_field() }} --}}
                <div class="form">
                    <div class="card-control">
                        <ul>
                            <li>
                                <div class="field fix" >
                                    <div class="input-box">
                                        <label class="label" for="first">Họ Và Tên<em>*</em></label>
                                        <input required type="text" name="name" class=" border-color" id="first">
                                    </div>
                                    <div class="input-box">
                                        <label class="label" for="last">Số Điện Thoại<em>*</em></label>
                                        <input required type="num" name="phone" class=" border-color" id="last">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field fix">
                                    <div class="input-box">
                                        <label class="label">Địa Chỉ </label>
                                        <input required type="text" name="address" class=" border-color" id="Company">
                                    </div>
                                    <div class="input-box">
                                        <label class="label">Email<em>*</em></label>
                                        <input required type="email" name="email" class=" border-color"/>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field fix">
                                    <div class="input-box inhun">
                                        <label class="label" for="addr">Ghi Chú<em>*</em></label>
                                        <textarea type="text" name="note" style="resize:none" rows="8" class=" border-color" id="addr"></textarea>

                                    </div>
                                </div>
                            </li>
                        </ul>
                        {{-- <div class="input-box">

                            <input type="submit" size="5" class=" btn btn-primary btn-sm"/>
                        </div> --}}
                    </div>

                </div>
            {{-- </form> --}}
        </div>
    </div>
    </div>
      </div>
      <div class="panel panel-default information">
        <div class="panel-heading" >
            <a class=" btn bill-info text-uppercase" ><span>2</span>Sản Phẩm</a>
        </div>
        <div id="order-review" class="panel-collapse detail-content">
            <div class="panel-body">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="billing-information clearfix">
                        <div class="table-responsive">
                            <table class="tablec">
                                <tbody><tr>
                                    <td style="font-size: 20px">Tên</td>
                                    <td style="font-size: 20px">Ảnh</td>
                                    <td style="font-size: 20px">Giá</td>
                                    <td style="font-size: 20px">Số lượng</td>
                                    <td style="font-size: 20px">Tổng tiền</td>
                                </tr>
                                @foreach (Cart::Content() as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td class="prod">
                                        <a href="#"><img src="http://localhost:8000/blog/public/site/img/products/{{ $item->options->img }}" alt="" height="150" width="150">
                                        </a>
                                    </td>
                                    <td><p class="tabletextp" style="font-size: 20px" >{{ number_format($item->price, 0, '', ',') }} VND</p></td>
                                    <td style="font-size: 20px">{{ $item->qty }}</td>
                                    <td><p class="tabletextp" style="font-size: 20px">{{ number_format($item->price * $item->qty, 0, '', ',') }}VND</p></td>
                                </tr>

                                @endforeach
                                <tr>
                                    <td colspan="3">
                                        <p class="tabletext" style="font-size: 25px">Tổng hóa đơn</p>
                                    </td>
                                    <td>
                                        <p class="tabletextp" style="font-size: 20px">{{ number_format(str_replace(',', '', Cart::subtotal()), 0, '', ',') }}
                                            VNĐ
                                </tr>

                                <tr>

                                    <td colspan="4">
                                           {{ csrf_field() }}
                                        <h4 style="    margin-left: 20px;">Hình Thức Thanh Toán</h4>
                                        <span><label style="  margin-left: 20px"><input  id="check" type="checkbox" required name="payment_op" value="1" size="10 ">
                                        </label>Thanh Toán Bằng ATM</span>
                                        <span><label style="   margin-left: 20px"><input type="checkbox" required name="payment_op"  id="check" size="10" value="2"></label>Thanh Toán Sau Khi Nhận Hàng</span>
                                        <div class="button-check">
                                            <div class="">
                                                <button type="submit" class="btn right-btn custom-button">Đặt Hàng</button>
                                            </div>
                                        </div>
                                    </td>
                                </form>
                                </tr>
                            </tbody></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</html>
@endsection

