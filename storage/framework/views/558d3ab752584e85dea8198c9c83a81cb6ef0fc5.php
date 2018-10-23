<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo e(Auth::user()->name); ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">NAVIGACIJA</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="/public/admin"><i class="fa fa-home"></i> <span>Pocetna</span></a></li>
            <li class="treeview">
                <a href="/public/admin/posts">
                    <i class="fa fa-files-o"></i>
                    <span>Objave</span>

                </a>
                <ul class="treeview-menu">

                    <li ><a href="/public/admin/posts"><i class="fa fa-file"></i> <span>Sve Objave</span></a></li>
                    <li ><a href="/public/admin/posts/add"><i class="fa fa-plus-circle"></i> <span>Dodaj Objavu</span></a></li>
                    <li ><a href="/public/admin/categories/add"><i class="fa fa-plus-circle"></i> <span>Dodaj Kategoriju</span></a></li>
                    <li ><a href="/public/admin/tags/add"><i class="fa fa-plus-circle"></i> <span>Dodaj Tag</span></a></li>
                </ul>
            </li>
            <li><a href="/public/admin/users"><i class="fa fa-users"></i> <span>Korisnici</span></a></li>
            <li ><a href="/public/admin/theme"><i class="fa fa-paint-brush"></i> <span>Izgled</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>