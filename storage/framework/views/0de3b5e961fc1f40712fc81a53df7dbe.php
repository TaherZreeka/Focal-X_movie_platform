<?php $__env->startSection('title', 'Showtimes Management'); ?>

<?php $__env->startSection('content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="flex py-3">
       <a href="<?php echo e(route('showtimes.index')); ?>" class="btn btn-danger p-2 mb-3"><i class="fas fa-trash"></i>All Showtime</a>
        </div>
       <div class="card">
       <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-center align-items-center" style="height: 100px;">
                <h6 class="text-white text-capitalize m-0"style="font-size: 32px;">All Showtime</h6>
              </div>
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
                              <th >Deleted At</th>
                              <th >Actions</th>

                          </tr>
                      </thead>

                      <tbody>
                          <?php $i = 0; ?>
                          <?php $__empty_1 = true; $__currentLoopData = $showtimes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $showtime): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                              <tr>
                                  <td><?php echo e(++$i); ?></td>
                                  <td><?php echo e($showtime->movie->title); ?></td>
                                  <td><?php echo e($showtime->date); ?></td>
                                  <td><?php echo e($showtime->time); ?></td>
                                  <td><?php echo e($showtime->hall); ?></td>
                                  <td><?php echo e($showtime->price); ?></td>
                                  <td><?php echo e($showtime->show_type); ?></td>
                                <td class="align-middle text-center">
                               <span class="text-secondary text-xs font-weight-bold"><?php echo e($showtime->deleted_at); ?></span>
                              </td>
                              <td class="align-middle">
                              <a class="btn btn-sm btn-primary" href="<?php echo e(route('showtimes.restore' ,$showtime)); ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                              <i class="fa-solid fa-rotate-left" style="font-size: 15px;"></i>
                              </a>


                          <form action="<?php echo e(route('showtimes.forcedelete', $showtime)); ?>" method="POST" style="display:inline;">
                           <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                           <button class="btn btn-sm btn-primary"   type="submit" class="text-secondary font-weight-bold text-xs" ><i class="fa-solid fa-trash fa-lg"style="font-size: 15px;"></i></button>
                              </form>

                            </td>
                              </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                              <tr>
                                  <td colspan="7" class="text-center">No data available.</td>
                              </tr>
                          <?php endif; ?>
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


<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\rag\focla-x\Focal-X_movie_platform\resources\views/content_admin/show_time/trash.blade.php ENDPATH**/ ?>