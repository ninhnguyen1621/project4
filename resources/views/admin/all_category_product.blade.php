@extends('admin.admin_Layout')
@section('admin_content')
    <div class="panel panel-default">
        <div class="panel-heading">
             Danh Mục
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
                <select class="input-sm form-control w-sm inline v-middle">
                    <option value="0">Bulk action</option>
                    <option value="1">Delete selected</option>
                    <option value="2">Bulk edit</option>
                    <option value="3">Export</option>
                </select>
                <button class="btn btn-sm btn-default">Apply</button>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <button type="submit" ><a href="{{URL::to('/add-category-product')}} " class="add-pr">Thêm</a></button>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Tên Danh Mục</th>
                        <th>Tình Trạng</th>
                        <th>Chức Năng</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_category_product as $key => $cate_pr)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]
                "><i></i></label></td>
                            <td>{{ $cate_pr->name }}</td>
                            <td class="status" style="font-size:20px;">
                                @if ($cate_pr->category_status == 0)
                                <span style="color: blue"><i class="fas fa-thumbs-up"></i></span></a>
                                @else
                                <span class="text-danger"><i class="fas fa-thumbs-down"></i><span></a>
                                @endif
                            </td>
                           <td>

                                <a href="{{ URL::to('/edit-category-product/'. $cate_pr->id) }}" class="active"
                                    ui-toggle-class="">
                                    <i style="font-size: 20px" class="fas fa-edit"></i>
                                </a></br>
                                <a onclick="return confirm('Bạn chắc chứ?')"
                                    href="{{ URL::to('/del-category-product/' . $cate_pr->id) }}" class="active"
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
                    {{$all_category_product->fragment('foo')->links()}}
                </div>
            </div>
        </footer>
    </div>
    </div>
@endsection
