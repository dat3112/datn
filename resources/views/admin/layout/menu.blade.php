<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{session('admin')}}</p>
                <a href="/backend/#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="/backend/#">
                    <i class="fa fa-edit"></i> <span>Quản lí user</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i> Tất cả user</a></li>
                    <li><a href="{{route('user.create')}}"><i class="fa fa-circle-o"></i> Thêm user</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="/backend/#">
                    <i class="fa fa-edit"></i> <span>Quản lí danh mục</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i> Tất cả danh mục</a></li>
                    <li><a href="{{route('category.create')}}"><i class="fa fa-circle-o"></i> Thêm danh mục</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="/backend/#">
                    <i class="fa fa-edit"></i> <span>Quản lí sản phẩm</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('product.index')}}"><i class="fa fa-circle-o"></i> Tất cả sản phẩm</a></li>
                    <li><a href="{{route('product.create')}}"><i class="fa fa-circle-o"></i> Thêm sản phẩm</a></li>
                </ul>
            </li>





        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
