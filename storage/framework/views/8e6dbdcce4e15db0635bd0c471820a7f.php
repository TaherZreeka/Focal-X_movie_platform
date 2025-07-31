<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="text-2xl font-bold mb-4">قائمة المشتركين</h2>

    <a href="<?php echo e(route('admin.users.create')); ?>" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">➕ إضافة مستخدم</a>

    <table class="table-auto w-full border text-center">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2 border">#</th>
                <th class="p-2 border">الاسم</th>
                <th class="p-2 border">البريد الإلكتروني</th>
                <th class="p-2 border">الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="p-2 border"><?php echo e($index + 1); ?></td>
                    <td class="p-2 border"><?php echo e($user->name); ?></td>
                    <td class="p-2 border"><?php echo e($user->email); ?></td>
                    <td class="p-2 border">
                        <a href="<?php echo e(route('admin.users.edit', $user->id)); ?>" class="text-blue-500">تعديل</a> |
                        <form action="<?php echo e(route('admin.users.destroy', $user->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-500" onclick="return confirm('هل أنت متأكد؟')">حذف</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\rag\focla-x\Focal-X_movie_platform\resources\views\admin\users\index.blade.php ENDPATH**/ ?>