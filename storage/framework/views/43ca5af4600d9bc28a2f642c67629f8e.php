<?php $__env->startSection('title', 'Add Showtime'); ?>

<?php $__env->startSection('content'); ?>

<div class="content-wrapper" dir="ltr">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Showtime</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Add Showtime</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form action="<?php echo e(route('showtimes.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Showtime Details</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" id="date" name="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="time" id="time" name="time" class="form-control" value="<?php echo e(old('time')); ?>"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="hall">Hall</label>
                                <input type="text" id="hall" name="hall" class="form-control" value="<?php echo e(old('hall')); ?>"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" step="0.01" id="price" name="price" class="form-control"
                                    value="<?php echo e(old('price')); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="show_type">Showtime Type</label>
                                <select id="show_type" name="show_type" class="form-control custom-select" required>
                                    <option selected disabled>Select one</option>
                                    <option value="morning" <?php echo e(old('show_type')=='morning' ? 'selected' : ''); ?>>Morning
                                    </option>
                                    <option value="evening" <?php echo e(old('show_type')=='evening' ? 'selected' : ''); ?>>Evening
                                    </option>
                                    <option value="weekend" <?php echo e(old('show_type')=='weekend' ? 'selected' : ''); ?>>Weekend
                                    </option>
                                    <option value="vip" <?php echo e(old('show_type')=='vip' ? 'selected' : ''); ?>>VIP</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Movie</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="movie_id">Movie</label>
                                <select id="movie_id" name="movie_id" class="form-control" required>
                                    <option selected disabled>Select a movie</option>
                                    <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($movie->id); ?>" <?php echo e(old('movie_id')==$movie->id ? 'selected' : ''); ?>>
                                        <?php echo e($movie->title); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="row">
                <div class="col-12">
                    <a href="<?php echo e(route('showtimes.index')); ?>" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-success float-right">Create Showtime</button>
                </div>
            </div>
        </form>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\mo\Focal-X_movie_platform\resources\views/content_admin/show_time/create.blade.php ENDPATH**/ ?>