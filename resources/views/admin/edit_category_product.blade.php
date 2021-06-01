@extends('admin.admin_Layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                 Cập Nhật Danh Mục Sản Phẩm
                </header>
                <div class="panel-body">
                    @foreach ($edit_category_product as $edit_value)


                    <div class="position-center">
                        <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->id)}}" method="post"  enctype="multipart/form-data">
                   {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Danh Mục</label>
                            <input name="category_product_name"class="form-control" value="{{$edit_value->name}}" id="exampleInputEmail1" placeholder="Tên Danh Mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô Tả Danh Mục</label>
                            <textarea style="resize:none" rows="5" name="category_product_des" class="form-control"
                           id="exampleInputEmail1" placeholder="Mô Tả Danh Mục"></textarea>
                        </div>
                        <div class="form-group">
                           <label for="exampleInputEmail1">Hiển Thị</label>
                             <select name="category_product_stt" class="form-control input-sm m-bot15" >
                                 <option value="0">Ẩn</option>
                                 <option value="1">Hiển Thị</option>
                          </select>
                        </div>
                        <button type="submit" name="add_category_product" class="btn btn-info">Cập Nhật</button>
                    </form>
                    </div>
                    @endforeach
                </div>
            </section>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.16.0/full-all/ckeditor.js"></script>
<script>
    CKEDITOR.replace('category_product_des');
</script>

@endsection
