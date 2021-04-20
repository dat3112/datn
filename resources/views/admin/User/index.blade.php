@extends('admin.layout.main')
@section('content')
    <section class="content-header">
        <h1>
            Quản lý người dùng
        </h1>
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
                                            <form action="{{route('user.search')}}" method="get">
                                                <input type="text" placeholder="Search.." name="tu-khoa" value="{{isset($keyword) ? $keyword : ''}}">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                        <thead>
                                        <tr role="row">
                                            <th>STT</th>
                                            <th>Tên</th>
                                            <th>Avatar</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Địa chỉ</th>
                                            <th>Giới tính</th>
                                            <th>Ngày sinh</th>
                                            <th>Mô tả</th>
                                            <th>Chức năng</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dat as $key =>$item)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{$key +1}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>
                                                    @if($item->avatar)
                                                        <img src="{{asset($item->avatar)}}" style="width: 60px;">
                                                    @endif
                                                </td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->password}}</td>
                                                <td>{{$item->address}}</td>
                                                <td>{{$item->gender}}</td>
                                                <td>{{$item->date}}</td>
                                                <td>{{$item->description}}</td>
                                                <td>
                                                    <a href="{{route('product.show',[$item->id])}}" class="btn btn-success">Xem</a>
                                                    <a href="{{route('product.edit',['id'=>$item->id])}}" class="btn btn-info">Sửa</a>
                                                    <a href="{{route('product.delete',['id'=>$item->id])}}" class="btn btn-danger">Xóa</a>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="container">
                                    {{$dat->links()}}
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




