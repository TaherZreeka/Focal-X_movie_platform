<?php $__env->startSection('title', 'Edit Showtime'); ?>

<?php $__env->startSection('content'); ?>
<div class="card mt-5 text-start" dir="ltr">
    <h2 class="card-header">Edit Showtime</h2>
    <div class="card-body">

        <form action="<?php echo e(route('showtimes.update', $showtime->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-3">
                <label for="movie" class="form-label"><strong>Movie:</strong></label>
                <select name="movie_id" id="movie" class="form-control" required>
                    <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($movie->id); ?>" <?php echo e($showtime->movie_id == $movie->id ? 'selected' : ''); ?>>
                            <?php echo e($movie->title); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label"><strong>Date:</strong></label>
                <input type="date" name="date" class="form-control" value="<?php echo e($showtime->date); ?>" required>
            </div>

            <div class="mb-3">
                <label for="time" class="form-label"><strong>Time:</strong></label>
                <input type="time" name="time" class="form-control" value="<?php echo e($showtime->time); ?>" required>
            </div>

            <div class="mb-3">
                <label for="hall" class="form-label"><strong>Hall:</strong></label>
                <input type="text" name="hall" class="form-control" value="<?php echo e($showtime->hall); ?>" required>
            </div>

            <div class="mb-3">
                <label for="show_type" class="form-label"><strong>Show Type:</strong></label>
                <select name="show_type" id="show_type" class="form-control" required>
                    <?php $__currentLoopData = \App\Enums\ShowTypeEnum::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($type->value); ?>" <?php echo e($showtime->show_type === $type->value ? 'selected' : ''); ?>>
                            <?php echo e(ucfirst($type->value)); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label"><strong>Price:</strong></label>
                <input type="number" name="price" class="form-control" step="0.01" value="<?php echo e($showtime->price); ?>" required>
            </div>

            <button type="submit" class="btn btn-success"><i class="fa-solid fa-check"></i> Update Showtime</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\rag\focla-x\Focal-X_movie_platform\resources\views\content_admin\show_time\edit.blade.php ENDPATH**/ ?>