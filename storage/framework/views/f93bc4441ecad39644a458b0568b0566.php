<?php $__env->startSection('title', 'تفاصيل مسؤول المحتوى'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper" dir="rtl">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>تفاصيل مسؤول المحتوى</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="/home">الرئيسية</a></li>
                        <li class="breadcrumb-item active">تفاصيل مسؤول المحتوى</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card card-outline card-secondary">
            <div class="card-body">
                <p><strong>الاسم:</strong> <?php echo e($user->name); ?></p>
                <p><strong>البريد الإلكتروني:</strong> <?php echo e($user->email); ?></p>
                <p><strong>الدور:</strong>
                    <?php switch($user->role):

                    case ('user'): ?> مستخدم <?php break; ?>
                    <?php default: ?> مسؤول محتوى
                    <?php endswitch; ?>
                </p>
                <a href="<?php echo e(route('admin.content.index')); ?>" class="btn btn-secondary mt-3">
                    <i class="fas fa-arrow-left"></i> العودة للقائمة
                </a>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\focal x\Focal_X-Graduation-Project\Movie_Platform_Management_System\resources\views/admin/content/show.blade.php ENDPATH**/ ?>