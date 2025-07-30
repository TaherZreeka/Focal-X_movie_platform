<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تعديل مسئول المحتوى</title>
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f2f2f2;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>تعديل مسئول المحتوى</h2>

    <form action="<?php echo e(route('admin.content.update', $user->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div class="mb-4">
        <label>الدور:</label>
        <select name="role" class="w-full border p-2" required>
            <option value="user" <?php if($user->role == 'user'): ?> selected <?php endif; ?>>مشترك</option>
            <option value="content" <?php if($user->role == 'content'): ?> selected <?php endif; ?>>مسؤول محتوى</option>
        </select>
    </div>

    <button class="bg-blue-500 text-white px-4 py-2 rounded">تحديث الدور</button>
</form>

</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Focal-X_movie_platform\resources\views/admin/content/edit.blade.php ENDPATH**/ ?>