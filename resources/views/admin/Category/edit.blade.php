@extends('admin.layout.main')
@section('content')
    <section class="content-header">
        <h1>
            <a href="{{route('category.index')}}" class="btn btn-primary" >Danh Sách</a>
        </h1>

    </section>

    <!-- Main content -->


    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Thông Tin</h3>
        </div>

        <div class="box-body">
            <form action="{{route('category.update',['id'=>$dat->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Tên Danh Mục</label>
                            <input value="{{$dat->name}}" type="text" class="form-control" id="'name" name="name" placeholder="Nhập teen danh mục">
                        </div>


                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>parent_id</label>
                            <input type="number" class="form-control" name="parent_id" value="{{$dat->parent_id}}" min="0">
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Vị Trí</label>
                            <input type="number" class="form-control" name="position" value="{{$dat->position}}" min="0">
                        </div>
                        <div class="form-group">
                            <label><input {{($dat->is_active == 1) ? 'checked':''}} type="checkbox" name="is_active" value="1">Trạng Thái</label>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Sửa</button>
                </div>
            </form>
        </div>

    </div>


    </section>
@endsection
