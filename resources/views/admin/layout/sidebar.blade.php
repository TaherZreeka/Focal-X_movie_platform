<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"> Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
                   <li class="nav-item has-treeview">
                  <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a></li>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ request()->is('admin/content-managers*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Content Admin Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/content-managers" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>index</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/content-managers/create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Content Admin Add</p>
                            </a>
                        </li>
                    </ul>
                </li>
                 <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            User Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/users" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>index</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/users/create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User Add</p>
                            </a>
                        </li>
                    </ul>
                </li>
                 <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ request()->is('admin/reports*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Movie Reports
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/reports" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reports</p>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>