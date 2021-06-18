@extends('admin.admin_Layout')
@section('admin_content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Chi Tiết Đơn Hàng
        </div>
        <div class="row w3-res-tb">

        </div>

        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>



                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">

                            </label>
                        </th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá Tiền</th>
                        <th>Số Lượng</th>
                        <th>Tổng Tiền</th>

                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order_by_id as $item)
                        <tr>
                            <td></td>
                            <td>{{ $item->product_name }}</td>
                            <td>{{ number_format($item->~,0,"",",")}} VNĐ</td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ number_format($item->product_price*$item->qty,0,"",",")}} VNĐ</td>
                        </tr>
@endforeach

                </tbody>
            </table>

        </div>

    </div>
    </div>
@endsection
