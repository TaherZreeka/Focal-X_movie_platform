@extends('content_admin.layout.master')

@section('title', 'تعديل مستخدم')

@section('content')
<div class="content-wrapper" dir="rtl">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6"><h1>تعديل المستخدم</h1></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="/home">الرئيسية</a></li>
            <li class="breadcrumb-item active">تعديل مستخدم</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="card card-info">
      <div class="card-header"><h3 class="card-title">تعديل بيانات المستخدم</h3></div>
      <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
         

          <div class="form-group">
            <label for="role">الدور</label>
            <select name="role" class="form-control">
              <option value="user" @selected($user->role === 'user')>مستخدم</option>
              <option value="content" @selected($user->role === 'content')>مسؤول محتوى</option>
           
            </select>
          </div>
        </div>

        <div class="card-footer text-left">
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> تحديث
          </button>
        </div>
      </form>
    </div>
  </section>
</div>
@endsection
