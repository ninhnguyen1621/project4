@extends('admin.admin_Layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                 Thêm Danh Mục Sản Phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-category-product')}}" method="post"  enctype="multipart/form-data">
                   {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Danh Mục</label>
                            <input name="category_product_name"class="form-control" id="exampleInputEmail1" placeholder="Tên Danh Mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô Tả Danh Mục</label>
                            <textarea style="resize:none" rows="5" name="category_product_des" class="form-control"
                           id="exampleInputEmail1" placeholder="Mô Tả Danh Mục"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hiển Thị</label>
                            <select name="category_product_stt" class="form-control input-sm m-bot15" >
                                <option value="0">Hiển Thị</option>
                                <option value="1">Ẩn</option>
                            </select>
                        </div>
                        <button type="submit" name="add_category_product" class="btn btn-info">Thêm</button>
                    </form>
                    </div>
                </div>
            </section>
    </div>
</div>
@endsection
