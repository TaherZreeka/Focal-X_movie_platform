<!-- Main Sidebar Container -->
<style>
    .sidebar,
    .main-sidebar {
        width: 285px;
        /* overflow-x: hidden; */
        /* position: fixed; */
    }


    .nav-item .nav-link {
        padding-left:0px;
        padding-right: 15px;
        margin-top: 15px
        padding-right: 0px;
        padding-left: 15px;

    }
.nav-sidebar {


  direction: ltr;
  text-align: left;
}
  .logout-button {
  position: absolute;
  bottom: 10px; /* بدلًا من 0 حتى لا يلتصق تمامًا */
  left: 0;
  right: 0;
  width: calc(100% - 20px); /* يعطي مساحة padding تلقائية */
  margin: 0 auto;
  background-color: #a00;
  border-radius: 10px;
  overflow: hidden;
}
  .logout-button a {
    color: white;
    padding: 10px 15px;
    display: flex;
    align-items: center;
    text-decoration: none;
  }

    .logout-button {
        position: absolute;
        bottom: 10px;
        /* بدلًا من 0 حتى لا يلتصق تمامًا */
        left: 0;
        right: 0;
        width: calc(100% - 20px);
        /* يعطي مساحة padding تلقائية */
        margin: 0 auto;
        background-color: #a00;
        border-radius: 10px;
        overflow: hidden;
    }


    .logout-button a {
        color: white;
        padding: 10px 15px;
        display: flex;
        align-items: center;
        text-decoration: none;
    }

    .logout-button i {
        margin-left: 10px;
    }

    a i {
        font-size: 20px;
        color: white;
    }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('home')); ?>" class="brand-link d-flex align-items-center">
        <img src="<?php echo e(asset('dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8; width: 35px; height: 35px;">
        <span class="brand-text font-weight-light ml-2">Content Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(asset('dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"> <?php echo e(Auth::user()->name); ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
                      <li class="nav-item has-treeview">
                  <a href="<?php echo e(route('home')); ?>" class="nav-link <?php echo e(request()->is('home') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a></li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link <?php echo e(request()->is('admin/users*') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            User Management
                            <i class="fas fa-angle-right right"></i>
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
                    <a href="#" class="nav-link <?php echo e(request()->is('admin/content-managers*') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Content Admin Management


                            <i class="fas fa-angle-right right"></i>
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
                    <a href="#" class="nav-link <?php echo e(request()->is('showtimes*') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            ShowTimes
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/showtimes" class="nav-link<?php echo e(request()->routeIs('index') ? 'active' : ''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>index</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/showtimes/create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ShowTime Add</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link <?php echo e(request()->is('admin/Movies*') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Movies
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/movies" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>index</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/movies/create" class="nav-link">
                        <li class="nav-item">
                            <a href="/movies/create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Movie Add</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link <?php echo e(request()->is('admin/reports*') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Movie Reports


                            <i class="fas fa-angle-right right"></i>
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
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link <?php echo e(request()->is('reviews*') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Movie reviews


                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(route('reviews.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reviews</p>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>

        </nav>
        <!-- /.sidebar-menu -->
        <div class="logout-button nav-sidebar flex-column">
            <a href="<?php echo e(route('logout')); ?>" class="nav-link" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">

                <i class="fas fa-sign-out-alt nav-icon "></i>
                <p class="mb-0" style="font-size:20px;color:white;"> logout</p>
            </a>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                <?php echo csrf_field(); ?>
            </form>
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH C:\xampp\htdocs\focal x\Focal_X-Graduation-Project\Movie_Platform_Management_System\resources\views/content_admin/layout/sidebar.blade.php ENDPATH**/ ?>