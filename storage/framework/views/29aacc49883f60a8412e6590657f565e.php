<?php $__env->startSection('title', 'movie Management'); ?>

<?php $__env->startSection('content'); ?>

<div class="content-wrapper" dir="rtl">
  <section class="content-header">
    <div class="container-fluid mx-3">
      <div class="row mb-2">

        <div class="col-sm-6 mx-3">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">movie</li>
          </ol>
        </div>

      </div>
    </div>
  </section>

  <section class="content">
    <div class="card">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-center align-items-center" style="height: 100px;">
                <h6 class="text-white text-capitalize m-0"style="font-size: 32px;"> Movies </h6>
              </div>
            </div>
      <div class="card-header">
        <h3 class="card-title">movie</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>

      <div class="card-body table-responsive p-0">
        <table class="table table-striped table-bordered table-hover text-center">
          <thead>
            <tr>



              <th>#</th>

              <th>title</th>
             <th class="text-center" style="width: 80px;">Duration</th>
              <th>description</th>
              <th>poster</th>
              <th>trailer</th>
              <th>Movie</th>
              <th>year</th>
              <th>language</th>
              <th>genre</th>

            </tr>
          </thead>
          <tbody>
            <?php $i = 0; ?>
            <?php $__empty_1 = true; $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <tr>


                <td><?php echo e(++$i); ?></td>
                <td><?php echo e($movie->title); ?></td>
                <td class="text-nowrap"><?php echo e($movie->duration); ?></td>
                <td><?php echo e(Str::limit($movie->description, 40)); ?></td>
                 <td>
              <img src="<?php echo e($movie->poster_url); ?>" alt="poster" width="50" height="70" style="object-fit: cover;">
            </td>
               <td>
              <a href="<?php echo e($movie->trailer_url); ?>" target="_blank" class="btn btn-sm btn-outline-primary">Trailer</a>
            </td>
                <td><?php echo e($movie->movie_url); ?></td>
                <td><?php echo e($movie->year); ?></td>
                <td><?php echo e($movie->language); ?></td>
                <td>
             <?php if($movie->genres): ?>
    <?php $__currentLoopData = $movie->genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <span class="badge badge-info"><?php echo e($genre->name); ?></span>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <span class="text-muted">No genres</span>
<?php endif; ?>

            </td>
                <td>
                  <a class="btn btn-primary btn-sm" href="<?php echo e(route('movies.show', $movie->id)); ?>">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a class="btn btn-info btn-sm" href="<?php echo e(route('movies.edit', $movie->id)); ?>">
                    <i class="fas fa-edit"></i>
                  </a>
                  <form action="<?php echo e(route('movies.destroy', $movie->id)); ?>" method="POST" style="display:inline-block;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this movie?')" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <tr>
                <td colspan="8" class="text-muted">No movies available.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\rag\focla-x\Focal-X_movie_platform\resources\views/content_admin/movies/index.blade.php ENDPATH**/ ?>