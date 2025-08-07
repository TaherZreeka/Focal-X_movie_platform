<!DOCTYPE html>

<html lang="en" dir="rtl">
<?php echo $__env->make('content_admin.layout.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <body class="hold-transition sidebar-mini layout-fixed">
        <!-- wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            <?php echo $__env->make('content_admin.layout.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <!-- /.navbar -->
            <!-- sidebar -->
            <?php echo $__env->make('content_admin.layout.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <!-- /.sidebar -->
            <!-- content -->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- /.content -->
            <!-- footer -->
            <?php echo $__env->make('content_admin.layout.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <!-- /.footer -->
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->


        <!-- jQuery -->

        <!-- <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?> -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>

                <!-- jQuery -->
            <script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
            <!-- jQuery UI -->
            <script src="<?php echo e(asset('plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
            <script>
                $.widget.bridge('uibutton', $.ui.button);
            </script>
            <!-- Bootstrap 4 RTL -->
            <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"></script>
            <!-- Bootstrap Bundle -->
            <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
            <!-- ChartJS -->
            <script src="<?php echo e(asset('plugins/chart.js/Chart.min.js')); ?>"></script>
            <!-- Sparkline -->
            <script src="<?php echo e(asset('plugins/sparklines/sparkline.js')); ?>"></script>
            <!-- JQVMap -->
            <script src="<?php echo e(asset('plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
            <script src="<?php echo e(asset('plugins/jqvmap/maps/jquery.vmap.world.js')); ?>"></script>
            <!-- jQuery Knob -->
            <script src="<?php echo e(asset('plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
            <!-- Daterangepicker -->
            <script src="<?php echo e(asset('plugins/moment/moment.min.js')); ?>"></script>
            <script src="<?php echo e(asset('plugins/daterangepicker/daterangepicker.js')); ?>"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="<?php echo e(asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
            <!-- Summernote -->
            <script src="<?php echo e(asset('plugins/summernote/summernote-bs4.min.js')); ?>"></script>
            <!-- overlayScrollbars -->
            <script src="<?php echo e(asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
            <!-- AdminLTE -->
            <script src="<?php echo e(asset('dist/js/adminlte.js')); ?>"></script>
            <!-- AdminLTE Dashboard Demo -->
            <script src="<?php echo e(asset('dist/js/pages/dashboard.js')); ?>"></script>
            <!-- AdminLTE for Demo -->
            <script src="<?php echo e(asset('dist/js/demo.js')); ?>"></script>

    </body>
</html>
<<<<<<< HEAD:storage/framework/views/6d0c9636da4b47af592dbb655bd0d8b4.php
<?php /**PATH D:\rag\focla-x\Focal-X_movie_platform\resources\views/content_admin/layout/master.blade.php ENDPATH**/ ?>
=======
    <?php /**PATH C:\xampp\htdocs\focal x\Focal_X-Graduation-Project\Movie_Platform_Management_System\resources\views/content_admin/layout/master.blade.php ENDPATH**/ ?>
>>>>>>> 9a21ff337ec6436d9dce2c2398baae3af22c8b9e:storage/framework/views/582fb22265231c55558cac2a55ca4de8.php
