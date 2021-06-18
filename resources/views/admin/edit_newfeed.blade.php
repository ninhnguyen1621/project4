@extends('admin.admin_Layout')
{{-- @extends('admin.edit_product', ['cate_edit' => $cate_edit]) --}}
@section('admin_content')
    <div class="row">

        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Sửa Bài Viết
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        @foreach ($edit_nf as $item)
                        <form role="form" method="post"action="{{URL::to('/update-new/'.$item->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tiêu đề</label>
                                <input name="title" class="form-control" id="exampleInputEmail1"
                                    value="{{$item->title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nội Dung</label>
                                <textarea style="resize:none" rows="5" name="post" class="form-control"
                                    id="mota"> {!!$item->post!!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ảnh</label>
                                <div id="img">
                                    <input type="file" name="img" multiple="">
                                    <img src="{{url('/')}}/site/img/blog/{{$item->img}}" height="150" width="150">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Thời gian</label>
                                <div id="time">
                                    <input required type="date"  name="time" value="{{$item->time}}">
                                    {{-- <br>
                                     <p>Ngày đăng :{{$item->time}}</p> --}}

                                </div>
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
    CKEDITOR.replace('post');
</script>
@endsection


