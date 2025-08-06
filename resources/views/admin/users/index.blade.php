@extends('admin.layout.master')

@section('title', 'قائمة المشتركين')

@section('content')
<div class="content-wrapper" dir="rtl">
<section class="content ">

    <div class="container-fluid flex">
         <div class="card-header d-flex justify-content-between align-items-center">


        <a href="{{ route('admin.users.create') }}" class="btn  btn-danger mb-3">
          <i class="fas fa-plus"></i> Create User
        </a>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
          </ol>
        </div>
      </div>
 <div class="card ">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="w-100 bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-center align-items-center" style="height: 100px;">
          <h1 class="text-white text-capitalize m-0"style="font-size: 32px;"> Users List</h1>
        </div>

      <div class="card-body p-0">
        <table class="table table-striped projects text-center">
          <thead >
            <tr>
              <th style="width: 10px">#</th>
              <th>name</th>
              <th>email </th>
              <th style="width: 200px">actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $index => $user)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="text-center">
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('هل أنت متأكد من الحذف؟')">
                  <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-info btn-sm">
                    <i class="fas fa-edit"></i>
                  </a>

                    @csrf
                   @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete"
                                        onclick="return confirm('Are you sure you want to delete this showtime?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                  </form>
                </td>
              </tr>
            @endforeach

            @if($users->isEmpty())
              <tr>
                <td colspan="4" class="text-muted">لا يوجد مشتركين حالياً.</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </section>
   </div>
</div>
@endsection
