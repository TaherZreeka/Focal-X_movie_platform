<?php $__env->startSection('title', 'قائمة المشتركين'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper" dir="rtl">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>قائمة المشتركين</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="/home">الرئيسية</a></li>
            <li class="breadcrumb-item active">المشتركين</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">المشتركين</h3>
        <a href="<?php echo e(route('admin.users.create')); ?>" class="btn btn-success btn-sm">
          <i class="fas fa-plus"></i> إضافة مستخدم
        </a>
      </div>

      <div class="card-body p-0">
        <table class="table table-striped projects text-center">
          <thead class="thead-dark">
            <tr>
              <th style="width: 10px">#</th>
              <th>الاسم</th>
              <th>البريد الإلكتروني</th>
              <th style="width: 200px">الإجراءات</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($index + 1); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td>
                  <a href="<?php echo e(route('admin.users.show', $user->id)); ?>" class="btn btn-primary btn-sm">
                    <i class="fas fa-eye"></i> عرض
                  </a>
                  <a href="<?php echo e(route('admin.users.edit', $user->id)); ?>" class="btn btn-info btn-sm">
                    <i class="fas fa-edit"></i> تعديل
                  </a>
                  <form action="<?php echo e(route('admin.users.destroy', $user->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('هل أنت متأكد من الحذف؟')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash"></i> حذف
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($users->isEmpty()): ?>
              <tr>
                <td colspan="4" class="text-muted">لا يوجد مشتركين حالياً.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\training XFocal\Focal-X_movie_platform\resources\views/admin/users/index.blade.php ENDPATH**/ ?>