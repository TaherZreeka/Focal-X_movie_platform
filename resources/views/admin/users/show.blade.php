@extends('content_admin.layout.master')

@section('title', 'تفاصيل المستخدم')

@section('content')
<div class="content-wrapper" dir="ltr">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6"><h1>تفاصيل المستخدم</h1></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="/home">الرئيسية</a></li>
            <li class="breadcrumb-item active">تفاصيل المستخدم</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="card card-outline card-secondary">
      <div class="card-body">
        <p><strong>الاسم:</strong> {{ $user->name }}</p>
        <p><strong>البريد الإلكتروني:</strong> {{ $user->email }}</p>
        <p><strong>الدور:</strong>
          @switch($user->role)
            @case('content') مسؤول محتوى @break
            @default مستخدم
          @endswitch
        </p>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary mt-3">
          <i class="fas fa-arrow-left"></i> العودة للقائمة
        </a>
      </div>
    </div>
  </section>
</div>
@endsection
