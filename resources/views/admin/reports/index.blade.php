@extends('content_admin.layout.master')

@section('title', 'تقرير الأفلام')

@section('content')
<div class="content-wrapper" dir="rtl">
    <section class="content-header">
        <div class="container-fluid ">
            <div class="row m-3">
                <div class="col-sm-6">
                    <h1 style="text-align: left;">Film report</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Film report </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content mx-3">

        <!-- الأفلام الأعلى مشاهدة -->
        <div class="card mb-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="w-100 bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-center align-items-center"
                    style="height: 100px;">

                    <h3 class="text-white text-capitalize m-0" style="font-size: 32px;">Most watched movies</h3>
                </div>
                <div class="card-body p-4">
                    <table class="table table-striped text-center py-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Movie title</th>
                                <th>Number of views</th>
                                <th>the language</th>
                                <th>Year of release</th>
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
            <div class="card p-3">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="w-100 bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-center align-items-center"
                        style="height: 100px;">

                        <h3 class="text-white text-capitalize m-0" style="font-size: 32px;">Highest rated movies</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th> Movie title</th>
                                    <th>Average rating</th>
                                    <th>the language</th>
                                    <th> Year of release</th>
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
                                    <td colspan="5" class="text-muted">There are no reviews currently</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

    </section>
</div>
@endsection