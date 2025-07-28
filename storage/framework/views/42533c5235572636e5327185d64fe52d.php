<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="text-2xl font-bold mb-4">إضافة مستخدم جديد</h2>
    
    <form action="<?php echo e(route('admin.users.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-4">
            <label>الاسم:</label>
            <input type="text" name="name" class="w-full border p-2" required>
        </div>

        <div class="mb-4">
            <label>البريد الإلكتروني:</label>
            <input type="email" name="email" class="w-full border p-2" required>
        </div>

        <div class="mb-4">
            <label>كلمة المرور:</label>
            <input type="password" name="password" class="w-full border p-2" required>
        </div>

        <div class="mb-4">
            <label>الدور:</label>
            <select name="role" class="w-full border p-2" required>
                <option value="user">مشترك</option>
                <option value="content">مسؤول محتوى</option>
                <option value="admin">مدير</option>
            </select>
        </div>

        <button class="bg-green-500 text-white px-4 py-2 rounded">إضافة</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\rag\focla-x\Focal-X_movie_platform\resources\views\admin\users\create.blade.php ENDPATH**/ ?>