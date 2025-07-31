@extends('admin.layout.master')

@section('title', 'إضافة مستخدم')

@section('content')
<div class="content-wrapper" dir="rtl">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6"><h1>إضافة مستخدم</h1></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="/home">الرئيسية</a></li>
            <li class="breadcrumb-item active">إضافة مستخدم</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="card card-primary">
      <div class="card-header"><h3 class="card-title">بيانات المستخدم الجديد</h3></div>
      <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="name">الاسم</label>
            <input type="text" name="name" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="email">البريد الإلكتروني</label>
            <input type="email" name="email" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="password">كلمة المرور</label>
            <input type="password" name="password" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="role">الدور</label>
            <select name="role" class="form-control">
              <option value="user">مستخدم</option>
              <option value="content">مسؤول محتوى</option>
              
            </select>
          </div>
        </div>

        <div class="card-footer text-left">
          <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i> حفظ
          </button>
        </div>
      </form>
    </div>
  </section>
</div>
@endsection
