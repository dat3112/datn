@extends('admin.layout.main')
@section('content')
    <section class="content-header">
        <h1>
            Data Tables
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                                           aria-describedby="example2_info">
                                        <div class="search-container">
                                            <a href="{{route('category.create')}}" class="btn btn-info">Thêm mới</a>
                                            <form action="{{route('category.search')}}" method="get">
                                                <input type="text" placeholder="Search.." name="tu-khoa" value="{{isset($keyword) ? $keyword : ''}}">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                        <thead>
                                        <tr role="row">
                                            <th>STT</th>
                                            <th>Tên danh mục</th>
                                            <th>Image</th>
                                            <th>Vị trí</th>
                                            <th>Trạng thái</th>
                                            <th>Chức năng</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($category as $key =>$item)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{$key +1}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>
                                                    @if($item->image)
                                                        <img src="{{asset($item->image)}}" style="width: 60px;">
                                                    @endif
                                                </td>
                                                <td>{{$item->position}}</td>
                                                <td>{{($item->is_active ==1)?'Hien thi':'An'}}</td>
                                                <td>
                                                    <a href="{{route('category.show',[$item->id])}}" class="btn btn-success">Xem</a>
                                                    <a href="{{route('category.edit',['id'=>$item->id])}}" class="btn btn-info">Sửa</a>
                                                    <a href="{{route('category.delete',['id'=>$item->id])}}" class="btn btn-danger">Xóa</a>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="container">
                                    {{$category->appends(['tu-khoa'=>$keyword])->links()}}
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection

