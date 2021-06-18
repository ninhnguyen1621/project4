@extends('admin.admin_Layout')
@section('admin_content')
    <div class="panel panel-default">
        <div class="panel-heading">
             Bài Viết
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <button type="submit" ><a href="{{URL::to('/ad-new')}} " class="add-pr">Thêm</a></button>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Tiêu Đề</th>
                        <th>Nội Dung</th>
                        <th>Ảnh</th>
                        <th>Thời Gian</th>
                        <th>Chức Năng</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($get_newfeed as $item)
                    <tr>
             <td><label class="i-checks m-b-none"><input type="checkbox"name="post[]"><i></i></label></td>
                <td>{{ $item->title }}</td>
                <td>{!!$item->post!!}</td>
                <td ><img src="{{url('/')}}/site/img/blog/{{$item->img}}" alt="" height="100px" width="150px"></td>
                <td>{{ $item->time }}</td>

            </td>
              <td>
                <a href="{{ URL::to('/edit-newfeed/'. $item->id) }}" class="active"
                    ui-toggle-class="">
                    <i style="font-size: 20px" class="fas fa-edit"></i>
                </a></br>
                <a onclick="return confirm('Bạn chắc chứ?')"
                    href="{{ URL::to('/del-new/' . $item->id) }}" class="active"
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
                {{-- <div class="col-sm-7 text-right text-center-xs">
                    {{$all_category_product->fragment('foo')->links()}}
                </div> --}}
            </div>
        </footer>
    </div>
    </div>
@endsection
