@extends('content_admin.layout.master')

@section('title', 'تقرير الأفلام')

@section('content')
<div class="content-wrapper" dir="rtl">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>تقرير الأفلام</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="/home">الرئيسية</a></li>
            <li class="breadcrumb-item active">تقرير الأفلام</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">

    <!-- الأفلام الأعلى مشاهدة -->
    <div class="card mb-4">
      <div class="card-header bg-info">
        <h3 class="card-title text-white">الأفلام الأعلى مشاهدة</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped text-center">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>عنوان الفيلم</th>
              <th>عدد المشاهدات</th>
              <th>اللغة</th>
              <th>سنة الإصدار</th>
            </tr>
          </thead>
          <tbody>
            @forelse($mostViewed as $index => $movie)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->views }}</td>
                <td>{{ $movie->language }}</td>
                <td>{{ $movie->year }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="text-muted">لا توجد بيانات مشاهدة حالياً.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>

    <!-- الأفلام الأعلى تقييماً -->
    <div class="card">
      <div class="card-header bg-success">
        <h3 class="card-title text-white">الأفلام الأعلى تقييماً</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped text-center">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>عنوان الفيلم</th>
              <th>متوسط التقييم</th>
              <th>اللغة</th>
              <th>سنة الإصدار</th>
            </tr>
          </thead>
          <tbody>
            @forelse($topRated as $index => $movie)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $movie->title }}</td>
                <td>{{ number_format($movie->ratings_avg_rating, 1) }}</td>
                <td>{{ $movie->language }}</td>
                <td>{{ $movie->year }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="text-muted">لا توجد تقييمات حالياً.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>

  </section>
</div>
@endsection
