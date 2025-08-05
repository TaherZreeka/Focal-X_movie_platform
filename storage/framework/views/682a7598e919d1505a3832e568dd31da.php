<?php $__env->startSection('title', 'Edit Showtime'); ?>

<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
  <!-- Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Showtime</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">Edit Showtime</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Form Content -->
  <section class="content">
    <form action="<?php echo e(route('showtimes.update', $showtime->id)); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>

      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Showtime Details</h3>
               <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" class="form-control" value="<?php echo e(old('date', $showtime->date)); ?>">
              </div>

              <div class="form-group">
                <label for="time">Time</label>
                <input type="time" name="time" class="form-control" value="<?php echo e(old('time', $showtime->time)); ?>">
              </div>

              <div class="form-group">
                <label for="hall">Hall</label>
                <input type="text" id="hall" name="hall" class="form-control"
                       value="<?php echo e(old('hall', $showtime->hall)); ?>" required>
              </div>

              <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" id="price" name="price" class="form-control"
                       value="<?php echo e(old('price', $showtime->price)); ?>" required>
              </div>

              <div class="form-group">
                <label for="type">Showtime Type</label>
                    <select name="show_type" class="form-control custom-select" required>
                            <option disabled <?php echo e(is_null($showtime->show_type) ? 'selected' : ''); ?>>Select one</option>
                            <option value="morning" <?php echo e($showtime->show_type->value === 'morning' ? 'selected' : ''); ?>>Morning</option>
                            <option value="evening" <?php echo e($showtime->show_type->value === 'evening' ? 'selected' : ''); ?>>Evening</option>
                            <option value="weekend" <?php echo e($showtime->show_type->value === 'weekend' ? 'selected' : ''); ?>>Weekend</option>
                            <option value="vip" <?php echo e($showtime->show_type->value === 'vip' ? 'selected' : ''); ?>>VIP</option>
                    </select>
              </div>
            </div>
          </div>
        </div>

        <!-- Movie Selection -->
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Movie</h3>
               <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="movie_id">Movie</label>
                <select id="movie_id" name="movie_id" class="form-control" required>
                  <option disabled>Select a movie</option>
                  <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($movie->id); ?>" <?php echo e(old('movie_id', $showtime->movie_id) == $movie->id ? 'selected' : ''); ?>>
                      <?php echo e($movie->title); ?>

                    </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Submit Buttons -->
      <div class="row">
        <div class="col-12">
          <a href="<?php echo e(route('showtimes.index')); ?>" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-success float-right">Save Changes</button>
        </div>
      </div>
    </form>
  </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\mo\Focal-X_movie_platform\resources\views/content_admin/show_time/edit.blade.php ENDPATH**/ ?>