 
 
<?php $__env->startSection('title', 'movie Management'); ?>

<?php $__env->startSection('content'); ?>

<div class="content-wrapper" dir="ltr">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>movie List</h1>
        </div>
        <div class="col-sm-6">
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

      <div class="card-body p-0">
        <table class="table table-striped projects text-center">
          <thead>
            <tr>

            
            <th></th>
              <th>#</th>
              
              <th>title</th>
              <th>duration</th>
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
<td>  </td>

                <td><?php echo e(++$i); ?></td>
                <td><?php echo e($movie->title); ?></td>
                <td><?php echo e($movie->duration); ?></td>
                <td><?php echo e($movie->description); ?></td>
                <td><?php echo e($movie->poster_url); ?></td>
                <td><?php echo e($movie->trailer_url); ?></td>
                <td><?php echo e($movie->movie_url); ?></td>
                <td><?php echo e($movie->year); ?></td>
                <td><?php echo e($movie->language); ?></td>
                <td><?php echo e($movie->genre); ?></td>
                <td>
                  <a class="btn btn-primary btn-sm" href="<?php echo e(route('content_admin.movies.show', $movie->id)); ?>">
                    <i class="fas fa-eye"></i> View
                  </a>
                  <a class="btn btn-info btn-sm" href="<?php echo e(route('content_admin.movies.edit', $movie->id)); ?>">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                  <form action="<?php echo e(route('content_admin.movies.destroy', $movie->id)); ?>" method="POST" style="display:inline-block;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this movie?')" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash"></i> Delete
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





<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\mo\Focal-X_movie_platform\resources\views/content_admin/movies/index.blade.php ENDPATH**/ ?>