@extends('admin.layout.main')
@section('content')
    <section class="content-header">
        <h1>
            <a href="{{route('category.index')}}" class="btn btn-primary" >Danh sách danh mục</a>
        </h1>

    </section>

    <!-- Main content -->


    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Thông Tin</h3>
        </div>

        <div class="box-body">
            <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">

                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Tên Danh Mục</label>
                            <input type="text" class="form-control" name="name" placeholder="Mời Bạn Nhập Tên">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Thêm danh mục</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </div>

                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>parent_id</label>
                            <input type="number" class="form-control" name="parent_id" placeholder="">
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Vị Trí</label>
                            <input type="number" class="form-control" name="position" value="0" min="0">
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
