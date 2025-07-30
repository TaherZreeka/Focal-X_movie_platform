<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>قائمة مسئولي المحتوى</title>
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
    <h2>قائمة مسؤولي المحتوى</h2>

    <a href="{{ route('admin.content.create') }}" class="add-btn"> إضافة مسئول محتوى</a>

    @if($contentManagers->isEmpty())
        <p>لا يوجد مسؤولو محتوى حالياً.</p>
    @else
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
            @foreach($contentManagers as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('admin.content.edit', $user->id) }}" class="edit-link">تعديل</a> |
                    <form action="{{ route('admin.content.destroy', $user->id) }}" method="POST" class="inline" onsubmit="return confirm('هل أنت متأكد من الحذف؟')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn">حذف</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
</body>
</html>
