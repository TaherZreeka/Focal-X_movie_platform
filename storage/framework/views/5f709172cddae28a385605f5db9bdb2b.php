 
<?php $__env->startSection('title', 'Showtimes Management'); ?>

<?php $__env->startSection('content'); ?>

<div class="content-wrapper" dir="ltr">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Showtimes List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">Showtimes</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Showtimes</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>

      <div class="card-body p-0">
        <table class="table table-striped projects text-center">
          <thead>
            <tr>
              <th>#</th>
              <th>Movie Title</th>
              <th>Date</th>
              <th>Time</th>
              <th>Hall</th>
              <th>Price</th>
              <th>Show Type</th>
              <th>Actions</th>
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
                <td>
                  <a class="btn btn-primary btn-sm" href="<?php echo e(route('showtimes.show', $showtime->id)); ?>">
                    <i class="fas fa-eye"></i> View
                  </a>
                  <a class="btn btn-info btn-sm" href="<?php echo e(route('showtimes.edit', $showtime->id)); ?>">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                  <form action="<?php echo e(route('showtimes.destroy', $showtime->id)); ?>" method="POST" style="display:inline-block;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this showtime?')" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash"></i> Delete
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <tr>
                <td colspan="8" class="text-muted">No showtimes available.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Showtimes List</h3>
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
                                  <td class="text-center">
                                <form action="<?php echo e(route('showtimes.destroy', $showtime->id)); ?>" method="POST" class="d-inline">
                                    <a class="btn btn-info btn-sm" href="<?php echo e(route('showtimes.show', $showtime->id)); ?>" title="Show">
                                        <i class="fa-solid fa-list"></i>
                                    </a>
                                    <a class="btn btn-primary btn-sm" href="<?php echo e(route('showtimes.edit', $showtime->id)); ?>" title="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete"
                                        onclick="return confirm('Are you sure you want to delete this showtime?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
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



<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\focal x\Focal_X-Graduation-Project\Movie_Platform_Management_System\resources\views/content_admin/show_time/index.blade.php ENDPATH**/ ?>