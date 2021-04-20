@extends('admin.layout.main')
@section('content')
    <section class="content-header">
        <h1>Thêm mới </h1>
    </section>

    <!-- Main content -->

    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
        <div class="box-header with-border">
            <a href="{{route('user.index')}}" class="btn btn-success" >Danh Sách</a>
        </div>

        <div class="box-body">
            <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" placeholder="Mời Bạn Nhập Tên" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label>ẢNH</label>
                            <input type="file" class="form-control" name="image" placeholder="">

                        </div>

                        <div class="form-group">
                            <label>ẢNH</label>
                            <input type="file" class="form-control select2" name="images[]" multiple="multiple">

                        </div>
                        <div class="form-group">
                            <label>Số lượng</label>
                            <input type="number" class="form-control" name="stock" placeholder="" value="">
                        </div>
                        <div class="form-group">
                            <label>Giá gốc</label>
                            <input type="text" class="form-control" name="price" placeholder="" value="">
                        </div>
                        <div class="form-group">
                            <label>Giá bán</label>
                            <input type="text" class="form-control" name="sale" placeholder="" value="">
                        </div>
                        <div class="form-group">
                            <label>Hot </label>
                            <input type="checkbox" name="is_hot" value="1">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            <button type="reset" class="btn btn-secondary">reset</button>
                        </div>

                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">

                        
                        

                        <div class="form-group">
                            <label>Vị Trí</label>
                            <input type="number" class="form-control" name="position" value="0" min="0">
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea name="description" id="editor1" ></textarea>
                        </div>
                        <div class="form-group">

                            <input type="checkbox" name="is_active" value="1">
                            <label>Trạng Thái</label>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>

    </div>


    </section>
@endsection
@section('script')
    <script>CKEDITOR.replace('editor1');</script>
@endsection
