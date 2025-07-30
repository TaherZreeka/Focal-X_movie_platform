<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>قائمة المستخدمين</title>
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f5f5f5;
            padding: 30px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        a.add-btn {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 15px;
            text-decoration: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
        }

        a.edit-link {
            color: #007bff;
            text-decoration: none;
            margin-right: 10px;
        }

        button.delete-btn {
            color: red;
            background: none;
            border: none;
            cursor: pointer;
        }

        form.inline {
            display: inline;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>قائمة المشتركين</h2>

    <a href="<?php echo e(route('admin.users.create')); ?>" class="add-btn">➕ إضافة مستخدم</a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>الاسم</th>
                <th>البريد الإلكتروني</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($index + 1); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td>
                    <a href="<?php echo e(route('admin.users.edit', $user->id)); ?>" class="edit-link">تعديل</a> |
                    <a href="<?php echo e(route('admin.users.show', $user->id)); ?>" class="edit-link">عرض</a> |
                    <form action="<?php echo e(route('admin.users.destroy', $user->id)); ?>" method="POST" class="inline" onsubmit="return confirm('هل أنت متأكد؟')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="delete-btn">حذف</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Focal-X_movie_platform\resources\views/admin/users/index.blade.php ENDPATH**/ ?>