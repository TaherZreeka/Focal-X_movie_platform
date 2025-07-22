@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-2xl font-bold mb-4">تعديل المستخدم</h2>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label>الاسم:</label>
            <input type="text" name="name" class="w-full border p-2" value="{{ $user->name }}" required>
        </div>

        <div class="mb-4">
            <label>البريد الإلكتروني:</label>
            <input type="email" name="email" class="w-full border p-2" value="{{ $user->email }}" required>
        </div>

        <div class="mb-4">
            <label>الدور:</label>
            <select name="role" class="w-full border p-2" required>
                <option value="user" @if($user->role == 'user') selected @endif>مشترك</option>
                <option value="content" @if($user->role == 'content') selected @endif>مسؤول محتوى</option>
                <option value="admin" @if($user->role == 'admin') selected @endif>مدير</option>
            </select>
        </div>

        <button class="bg-blue-500 text-white px-4 py-2 rounded">تحديث</button>
    </form>
</div>
@endsection
