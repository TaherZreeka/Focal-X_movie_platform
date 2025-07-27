<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="text-2xl font-bold mb-4">تعديل المستخدم</h2>

    <form action="<?php echo e(route('admin.users.update', $user->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-4">
            <label>الاسم:</label>
            <input type="text" name="name" class="w-full border p-2" value="<?php echo e($user->name); ?>" required>
        </div>

        <div class="mb-4">
            <label>البريد الإلكتروني:</label>
            <input type="email" name="email" class="w-full border p-2" value="<?php echo e($user->email); ?>" required>
        </div>

        <div class="mb-4">
            <label>الدور:</label>
            <select name="role" class="w-full border p-2" required>
                <option value="user" <?php if($user->role == 'user'): ?> selected <?php endif; ?>>مشترك</option>
                <option value="content" <?php if($user->role == 'content'): ?> selected <?php endif; ?>>مسؤول محتوى</option>
                <option value="admin" <?php if($user->role == 'admin'): ?> selected <?php endif; ?>>مدير</option>
            </select>
        </div>

        <button class="bg-blue-500 text-white px-4 py-2 rounded">تحديث</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\rag\focla-x\Focal-X_movie_platform\resources\views\admin\users\edit.blade.php ENDPATH**/ ?>