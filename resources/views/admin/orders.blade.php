@extends('admin.admin_Layout')
@section('admin_content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Quản Lý Đơn Hàng
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Tìm</button>
                    </span>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">

                            </label>
                        </th>
                        <th>Tên Người Mua</th>
                        <th>Số Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Nội Dung</th>
                        <th>Tình Trạng</th>
                        <th>Chức Năng</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_order as  $iteam)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]
                     "><i></i></label></td>
                            <td>{{ $iteam->name }}</td>
                            <td>{{ $iteam->phone }}</td>
                            <td>{{ $iteam->address }}</td>
                            <td>{{ $iteam->note }}</td>
                            <td>{{ $iteam->status }}</td>

                           <td>

                                <a href="{{ URL::to('/order_detail/' . $iteam->id)}}" class="active"
                                    ui-toggle-class="">

                                    <i style="font-size: 20px" class="fas fa-eye"></i>
                                </a></br>
                                <a onclick="return confirm('Bạn chắc chứ?')"
                                    href="{{ URL::to('/del-category-product/' ) }}" class="active"
                                    ui-toggle-class="">
                                    <i style="font-size: 25px" class="fa fa-times text-danger text "></i>
                                </a>
                             </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
       <footer class="panel-footer">
            <div class="row">

                <div class="col-sm-5 text-center">
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    {{$all_order->fragment('foo')->links()}}
                </div>
            </div>
        </footer>
    </div>
    </div>
@endsection
