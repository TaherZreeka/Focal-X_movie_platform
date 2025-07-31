 
<?php $__env->startSection('title', 'Showtimes Management'); ?>

<?php $__env->startSection('content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">current Showtime</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
              <div class="container-fluid">
                <table class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="10px">No</th>
                              <th>MovieName</th>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Hall</th>
                              <th>Price</th>
                              <th>Show Type</th>
                              
                          </tr>
                      </thead>

                      <tbody>
                          <?php $i = 0; ?>
                         
                              <tr>
                                  <td><?php echo e(++$i); ?></td>
                                  <td><?php echo e($showtime->movie->title); ?></td>
                                  <td><?php echo e($showtime->date); ?></td>
                                  <td><?php echo e($showtime->time); ?></td>
                                  <td><?php echo e($showtime->hall); ?></td>
                                  <td><?php echo e($showtime->price); ?></td>
                                  <td><?php echo e($showtime->show_type); ?></td>
                              </tr>
                      </tbody>
                </table>
              </div>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\rag\focla-x\Focal-X_movie_platform\resources\views\content_admin\show_time\show.blade.php ENDPATH**/ ?>