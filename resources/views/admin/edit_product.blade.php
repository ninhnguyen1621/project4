@extends('admin.admin_Layout')
{{-- @extends('admin.edit_product', ['cate_edit' => $cate_edit]) --}}
@section('admin_content')
    <div class="row">

        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Sửa Sản Phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        @foreach ($edit_product as $item)
                        <form role="form" method="post"action="{{URL::to('/update-product/'.$item->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                                <input name="name" class="form-control" id="exampleInputEmail1"
                                    value="{{$item->name}}">
                            </div>
                            <div  class="form-group">
                                <label for="exampleInputEmail1">Gía</label>
                                <input required type="number" min="0" name="price" class="form-control" id="exampleInputEmail1" value="{{$item->price}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ảnh</label>
                                <div id="img">
                                    <input type="file" name="img">
                                    <img src="{{url('/')}}/site/img/products/{{$item->img}}" height="150" width="150">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Xuất Xứ</label>
                                    <input required name="origin" class="form-control" id="exampleInputEmail1"
                                    value="{{$item->origin}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô Tả </label>
                                <textarea style="resize:none" rows="5" name="describe" class="form-control"
                                    id="mota"> {{$item->describe}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Danh Mục</label>
                                <select name="cat_id" class="form-control input-sm m-bot15">
                                    @foreach ($cate_edit as $cate)
                                    @if ($item->cat_id==$cate->id)
                                    <option selected value="{{$cate->id}}">{{$cate->name}}</option>
                                    @else
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endif
                                    @endforeach
                                </select>

                            </div>
                            <button type="submit" class="btn btn-info">Sửa</button>
                        </form>
                        @endforeach

                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.0/full-all/ckeditor.js"></script>
<script>
    CKEDITOR.replace('describe');

</script>
@endsection


