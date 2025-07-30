<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>إضافة مسئول محتوى </title>
    <style>
        body {
            font-family: 'Tahoma', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        button {
            background-color: #27ae60;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #219150;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>إضافة مسؤول محتوى</h2>

        <form action="{{ route('admin.content.store') }}" method="POST">
            @csrf

            <label>الاسم:</label>
            <input type="text" name="name" required>

            <label>البريد الإلكتروني:</label>
            <input type="email" name="email" required>

            <label>كلمة المرور:</label>
            <input type="password" name="password" required>

            <label>الدور:</label>
            <select name="role" required>
                <option value="user">مشترك</option>
                <option value="content">مسؤول محتوى</option>
                <option value="admin">مدير</option>
            </select>

            <button type="submit">إضافة</button>
        </form>
    </div>
</body>
</html>