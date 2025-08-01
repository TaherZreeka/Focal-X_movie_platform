<?php $__env->startSection('title', 'تعديل مستخدم'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper" dir="rtl">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6"><h1>تعديل المستخدم</h1></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="/home">الرئيسية</a></li>
            <li class="breadcrumb-item active">تعديل مستخدم</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="card card-info">
      <div class="card-header"><h3 class="card-title">تعديل بيانات المستخدم</h3></div>
      <form action="<?php echo e(route('admin.users.update', $user->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="card-body">
         

          <div class="form-group">
            <label for="role">الدور</label>
            <select name="role" class="form-control">
              <option value="user" <?php if($user->role === 'user'): echo 'selected'; endif; ?>>مستخدم</option>
              <option value="content" <?php if($user->role === 'content'): echo 'selected'; endif; ?>>مسؤول محتوى</option>
           
            </select>
          </div>
        </div>

        <div class="card-footer text-left">
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> تحديث
          </button>
        </div>
      </form>
    </div>
  </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Focal-X_movie_platform\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>