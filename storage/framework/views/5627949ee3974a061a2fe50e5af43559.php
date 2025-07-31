

<?php $__env->startSection('title', 'تعديل مسؤول المحتوى'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">تعديل مسؤول محتوى </h2>
    <form action="<?php echo e(route('admin.content.update', $user->id)); ?>" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-4">
            <label for="role" class="block text-gray-700">الدور</label>
            <select name="role" id="role" class="w-full border p-2 rounded">
                <option value="content" <?php echo e((old('role', $user->role ?? '') == 'content') ? 'selected' : ''); ?>>ممسؤول محتوى</option>
                <option value="user" <?php echo e((old('role', $user->role ?? '') == 'user') ? 'selected' : ''); ?>> مستخدم</option>
            </select>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">تحديث</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Focal-X_movie_platform\resources\views/admin/content/edit.blade.php ENDPATH**/ ?>