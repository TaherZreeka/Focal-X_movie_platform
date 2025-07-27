@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-2xl font-bold mb-4">قائمة المشتركين</h2>

    <a href="{{ route('admin.users.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">➕ إضافة مستخدم</a>

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
            @foreach($users as $index => $user)
                <tr>
                    <td class="p-2 border">{{ $index + 1 }}</td>
                    <td class="p-2 border">{{ $user->name }}</td>
                    <td class="p-2 border">{{ $user->email }}</td>
                    <td class="p-2 border">
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="text-blue-500">تعديل</a> |
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500" onclick="return confirm('هل أنت متأكد؟')">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
