<!DOCTYPE html>

<html lang="en" dir="rtl">
@include('content_admin.layout.header')

    <body class="hold-transition sidebar-mini layout-fixed">
        <!-- wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            @include('content_admin.layout.navbar')
            <!-- /.navbar -->
            <!-- sidebar -->
            @include('content_admin.layout.sidebar')
            <!-- /.sidebar -->
            <!-- content -->
            @yield('content')
            <!-- /.content -->
            <!-- footer -->
            @include('content_admin.layout.footer')
            <!-- /.footer -->
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->


        <!-- jQuery -->

        <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
        @vite(['resources/js/app.js'])

                <!-- jQuery -->
            <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
            <!-- jQuery UI -->
            <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
            <script>
                $.widget.bridge('uibutton', $.ui.button);
            </script>
            <!-- Bootstrap 4 RTL -->
            <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"></script>
            <!-- Bootstrap Bundle -->
            <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <!-- ChartJS -->
            <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
            <!-- Sparkline -->
            <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
            <!-- JQVMap -->
            <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
            <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.world.js') }}"></script>
            <!-- jQuery Knob -->
            <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
            <!-- Daterangepicker -->
            <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
            <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
            <!-- Summernote -->
            <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
            <!-- overlayScrollbars -->
            <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
            <!-- AdminLTE -->
            <script src="{{ asset('dist/js/adminlte.js') }}"></script>
            <!-- AdminLTE Dashboard Demo -->
            <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
            <!-- AdminLTE for Demo -->
            <script src="{{ asset('dist/js/demo.js') }}"></script>

    </body>
</html>
