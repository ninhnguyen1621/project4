@extends('Frontend.Master.master')
@section('content')
<div class="breadcumb-area detail cart-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcumb">
                    <p class="b-men">
                        <a href="#"><i class="fa fa-home"></i>
                            <span class="home">Trang Chủ</span>
                        </a>
                        <i class="fa fa-angle-right"></i>
                        <span class="s-cart">Giỏ hàng</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Breadcumb area -->
<div class="cart-area-detail cart">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive text-center">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="bgcolor">
                                <th class="text-center">Products</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Giá</th>
                                <th class="text-center">Số lượng</th>
                                <th class="text-center">Tổng tiền</th>
                                <th></th>
                            </tr>
                        </thead>
                        @foreach (Cart::Content() as $item)
                        <tbody>
                            <tr class="table-info">
                                <td class="prod">
                                    <a href="#"><img src="http://localhost:8000/blog/public/site/img/products/{{ $item->options->img }}" alt="">
                                    </a>
                                </td>
                                <td class="ptitle"><a >{{ $item->name }}</a>
                                </td>
                                <td class="unit"><span>{{ number_format($item->price, 0, '', ',') }} VND</span>
                                </td>
                                <td class="qty">
                                    <input onchange="update_qty('{{ $item->rowId }}',this.value)"
                                    type="number" id="quantity" name="quantity"
                                    class="form-control input-number text-center"
                                    value="{{ $item->qty }}">
                                </td>
                                <td class="unit"><span>{{ number_format($item->price * $item->qty, 0, '', ',') }}VND</span>
                                </td>
                                <td><a onclick="return del_cart('{{ $item->name }}')" href="{{ route('removecart', ['id' => $item->rowId]) }}"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach

                    </table>
                </div>
                <div class="cart-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                                <div class="grand-total-area">
                                    <p class="sub-total">Tổng tiền: {{ number_format(str_replace(',', '', Cart::subtotal()), 0, '', ',') }}
                                        VNĐ</p>
                                        <?php
                                        $customer_id=session()->get('id');
                                        if($customer_id!=Null){

                                       ?>
                                       <li><a class="pro-checkout text-uppercase" href="{{URL::to('/check-out')}}">Đặt Hàng</a></li>
                                       <?php
                                        }else{
                                            # code...
                                       ?>
                                      <li><a class="pro-checkout text-uppercase" href="{{URL::to('/logincheck-out')}}">Đặt Hàng</a></li>
                                       <?php
                                       }
                                       ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('sc')
@parent
<script>
    function del_cart(name) {
        return confirm('Bạn muốn xóa khỏi giỏ hàng: ' + name + ' ?');
    }
    function update_qty(rowId, qty) {
        $.get('http://localhost:8000/blog/public/updatecart/' + rowId + '/' + qty,
            function() {
                window.location.reload();
            }
        );
    }
</script>
@endsection

@endsection
