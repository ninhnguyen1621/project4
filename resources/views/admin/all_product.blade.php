@extends('admin.admin_Layout')
@section('admin_content')
    <div class="panel panel-default">
        <div class="panel-heading">
          Quản Lý Sản Phẩm
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="input-sm form-control"
placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <button type="submit" ><a href="{{URL::to('/add-product')}} " class="add-pr">Thêm</a></button>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">

                            </label>
                        </th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Ảnh</th>
                        <th>Xuất xứ</th>
                        <th>Danh Mục</th>
                        <th>Mô Tả</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $item)
                        <tr>
                 <td><label class="i-checks m-b-none"><input type="checkbox"name="post[]"><i></i></label></td>
                    <td>{{ $item->name }}</td>
                    <td>{{ number_format($item->price,0,"",",")}} VND</td>
                    <td ><img src="{{url('/')}}/site/img/products/{{$item->img}}" alt="" height="100px" width="100px"></td>
                    <td>{{ $item->origin}}</td>
                    <td>{{$item->category->name}}</td>

                    <td>{!!$item->describe!!}</td>

                </td>
                  <td>
                    <a href="{{ URL::to('/edit-product/'. $item->id) }}" class="active"
                        ui-toggle-class="">
                        <i style="font-size: 20px" class="fas fa-edit"></i>
                    </a></br>
                    <a onclick="return confirm('Bạn chắc chứ?')"
                        href="{{ URL::to('/del-product/' . $item->id) }}" class="active"
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
                    {{$product->fragment('foo')->links()}}
             </div>
            </div>
        </footer>
    </div>
    </div>

@endsection
