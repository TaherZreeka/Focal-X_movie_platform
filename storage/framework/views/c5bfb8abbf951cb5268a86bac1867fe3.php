<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تفاصيل المستخدم</title>
</head>
<body>
    <h2>تفاصيل المستخدم</h2>
    <p><strong>الاسم:</strong> <?php echo e($user->name); ?></p>
    <p><strong>البريد الإلكتروني:</strong> <?php echo e($user->email); ?></p>
    <p><strong>الدور:</strong> <?php echo e($user->role); ?></p>
    <a href="<?php echo e(route('admin.users.index')); ?>">عودة للقائمة</a>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Focal-X_movie_platform\resources\views/admin/users/show.blade.php ENDPATH**/ ?>