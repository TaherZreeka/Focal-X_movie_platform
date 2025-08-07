<?php $__env->startSection('title', 'قائمة مسئولي المحتوى'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper" dir="rtl">
<section class="content">


    <div class="container-fluid">
         <div class="card-header d-flex justify-content-between align-items-center">
        <a href="<?php echo e(route('admin.content.create')); ?>" class="btn btn-danger mb-3">
          <i class="fas fa-plus"></i> Create Content Admin
        </a>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active"> Content Admin</li>
          </ol>
        </div>
      </div>
      <div class="card">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="w-100 bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-center align-items-center" style="height: 100px;">
          <h1 class="text-white text-capitalize m-0"style="font-size: 32px;">List Of Content Admin</h1>
        </div>

      </div>

      <div class="card-body p-0">
        <table class="table table-striped projects text-center">
          <thead >
            <tr>
              <th style="width: 10px">#</th>
              <th>name</th>
              <th>email </th>
              <th style="width: 200px">actions</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $contentManagers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($index + 1); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td>
                  <a href="<?php echo e(route('admin.content.show', $user->id)); ?>" class="btn btn-primary btn-sm">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="<?php echo e(route('admin.content.edit', $user->id)); ?>" class="btn btn-info btn-sm">
                    <i class="fas fa-edit"></i>
                  </a>
                  <form action="<?php echo e(route('admin.content.destroy', $user->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('هل أنت متأكد من الحذف؟')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($contentManagers->isEmpty()): ?>
              <tr>
                <td colspan="4" class="text-muted">لا يوجد مسئولي محتوى حالياً.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
    <div>
  </section>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\mo\Focal-X_movie_platform\resources\views\admin\content\index.blade.php ENDPATH**/ ?>