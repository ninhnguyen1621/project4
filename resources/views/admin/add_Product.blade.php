@extends('admin.admin_Layout')
@section('admin_content')
    <div class="row">

        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Sản Phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                                <input name="name" class="form-control" id="exampleInputEmail1"
                                    placeholder="Tên Sản Phẩm">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gía</label>
                                <input name="price" class="form-control" id="exampleInputEmail1" placeholder="Gía">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ảnh</label>
                                <div id="img">
                                    <input type="file" name="img" multiple="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Xuất Xứ</label>
                                    <input name="origin" class="form-control" id="exampleInputEmail1"
                                        placeholder="Xuất Xứ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô Tả </label>
                                <textarea style="resize:none" rows="5" name="describe" class="form-control"
                                    id="mota" placeholder="Mô Tả "></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Danh Mục</label>
                                <select name="cat_id" class="form-control input-sm m-bot15">
                                    @foreach ($category as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-info" >Thêm</button>
                        </form>
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


