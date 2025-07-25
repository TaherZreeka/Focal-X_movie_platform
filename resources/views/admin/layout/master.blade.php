<!DOCTYPE html>
  <html lang="ar">
      @include('admin.layout.header') 
        <body class="hold-transition sidebar-mini layout-fixed">
            <!-- wrapper -->      
                <div class="wrapper">
                      <!-- Navbar -->
                          @include('admin.layout.navbar')  
                      <!-- /.navbar -->
                      <!-- sidebar -->
                          @include('admin.layout.sidebar') 
                      <!-- /.sidebar -->
                      <!-- content -->
                          @yield('content') 
                      <!-- /.content -->
                      <!-- footer -->
                            @include('admin.layout.footer')
                      <!-- /.footer -->
                </div>
            <!-- ./wrapper -->

            <!-- jQuery -->
                
                <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
                @vite(['resources/js/app.js'])

                <script src="plugins/jquery/jquery.min.js"></script>
                <!-- jQuery UI 1.11.4 -->
                <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
                <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                <script>
                  $.widget.bridge('uibutton', $.ui.button)
                </script>
                <!-- Bootstrap 4 rtl -->
                <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"></script>
                <!-- Bootstrap 4 -->
                <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- ChartJS -->
                <script src="plugins/chart.js/Chart.min.js"></script>
                <!-- Sparkline -->
                <script src="plugins/sparklines/sparkline.js"></script>
                <!-- JQVMap -->
                <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
                <script src="plugins/jqvmap/maps/jquery.vmap.world.js"></script>
                <!-- jQuery Knob Chart -->
                <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
                <!-- daterangepicker -->
                <script src="plugins/moment/moment.min.js"></script>
                <script src="plugins/daterangepicker/daterangepicker.js"></script>
                <!-- Tempusdominus Bootstrap 4 -->
                <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
                <!-- Summernote -->
                <script src="plugins/summernote/summernote-bs4.min.js"></script>
                <!-- overlayScrollbars -->
                <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
                <!-- AdminLTE App -->
                <script src="dist/js/adminlte.js"></script>
                <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                <script src="dist/js/pages/dashboard.js"></script>
                <!-- AdminLTE for demo purposes -->
                <script src="dist/js/demo.js"></script>
            <!-- ./jQuery -->
        </body>
  </html>
