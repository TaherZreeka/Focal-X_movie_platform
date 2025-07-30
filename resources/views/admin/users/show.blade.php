<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تفاصيل المستخدم</title>
</head>
<body>
    <h2>تفاصيل المستخدم</h2>
    <p><strong>الاسم:</strong> {{ $user->name }}</p>
    <p><strong>البريد الإلكتروني:</strong> {{ $user->email }}</p>
    <p><strong>الدور:</strong> {{ $user->role }}</p>
    <a href="{{ route('admin.users.index') }}">عودة للقائمة</a>
</body>
</html>
