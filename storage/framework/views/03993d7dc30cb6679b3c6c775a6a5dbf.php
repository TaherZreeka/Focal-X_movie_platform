<?php $__env->startSection('title', 'تفاصيل المستخدم'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper" dir="ltr">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>تفاصيل المستخدم</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="/home">الرئيسية</a></li>
                        <li class="breadcrumb-item active">تفاصيل المستخدم</li>
                    </ol>
                </div>
    </section>

    <section class="content">
        <div class="card card-outline card-secondary">
            <div class="card-body">
                <p><strong>الاسم:</strong> <?php echo e($user->name); ?></p>
                <p><strong>البريد الإلكتروني:</strong> <?php echo e($user->email); ?></p>
                <p><strong>الدور:</strong>
                    <?php switch($user->role):
                    case ('content'): ?> مسؤول محتوى <?php break; ?>
                    <?php default: ?> مستخدم
                    <?php endswitch; ?>
                </p>
                <a href="<?php echo e(route('admin.users.index')); ?>" class="btn btn-secondary mt-3">
                    <i class="fas fa-arrow-left"></i> العودة للقائمة
                </a>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\focal x\Focal_X-Graduation-Project\Movie_Platform_Management_System\resources\views/admin/users/show.blade.php ENDPATH**/ ?>