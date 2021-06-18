@extends('admin.admin_Layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                 Thêm Bài Viết
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-newfeed')}}" method="post"  enctype="multipart/form-data">
                   {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tiêu Đề</label>
                            <input name="title"class="form-control" id="exampleInputEmail1" placeholder="Tiêu Đề">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nội Dung</label>
                            <textarea style="resize:none" rows="5" name="post" class="form-control"
                           id="exampleInputEmail1" placeholder="Nội Dung"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ảnh</label>
                            <div id="img">
                                <input required type="file" name="img" multiple="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Thời gian</label>
                            <div id="time">
                                <input type="date"  name="time">
                            </div>
                        </div>
                        <button type="submit" name="add_category_product" class="btn btn-info">Thêm</button>
                    </form>
                    </div>
                </div>
            </section>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.16.0/full-all/ckeditor.js"></script>
<script>
    CKEDITOR.replace('post');
</script>
@endsection
