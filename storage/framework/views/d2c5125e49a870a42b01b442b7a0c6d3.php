 
<?php $__env->startSection('title', 'Add Showtime'); ?>

<?php $__env->startSection('content'); ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <form action="<?php echo e(route('showtimes.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Showtime </h3>
              </div>
              <div class="card-body">
                
                <div class="form-group">
                  <label for="movie">Movie</label>
                  <select name="movie_id" id="movie" class="form-control" required>
                      <option value="" disabled selected>Select Movie</option>
                      <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($movie->id); ?>"><?php echo e($movie->title); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="date">Date</label>
                  <input type="date" id="date" name="date" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="time">Time</label>
                  <input type="time" id="time" name="time" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="hall">Hall</label>
                  <input type="text" id="hall" name="hall" class="form-control" placeholder="e.g., Hall 1" required>
                </div>

                <div class="form-group">
                    <label for="show_type">Show Type</label>
                    <select name="show_type" id="show_type" class="form-control" required>
                        <?php $__currentLoopData = \App\Enums\ShowTypeEnum::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($type->value); ?>"><?php echo e(ucfirst($type->value)); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="number" id="price" name="price" class="form-control" step="0.01" required>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- Submit -->
        <div class="row">
          <div class="col-12">
            <a href="<?php echo e(route('showtimes.index')); ?>" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Add Showtime" class="btn btn-success float-right">
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\rag\focla-x\Focal-X_movie_platform\resources\views\content_admin\show_time\create.blade.php ENDPATH**/ ?>