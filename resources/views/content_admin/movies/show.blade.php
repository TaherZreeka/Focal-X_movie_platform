@extends('content_admin.layout.master')

@section('title', 'Movies Management')

@section('content')
<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>movie Detail</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">movie Detail</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Current movie</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>title</th>
                            <th class="text-center" style="width: 80px;">duration</th>
                             <th class="text-center">description</th>
                            <th>poster</th>
                             <th>trailer</th>
                             <th>movie</th>
                             <th>year</th>
                             <th>language</th>
                               <th>genre</th>

            </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                 <td>{{ $movie->title }}</td>
                <td class="text-nowrap">{{ $movie->duration }}</td>
                <td>{{ Str::limit($movie->description, 40) }}</td>
                 <td>
              <img src="{{ $movie->poster_url }}" alt="poster" width="50" height="70" style="object-fit: cover;">
            </td>
               <td>
              <a href="{{ $movie->trailer_url }}" target="_blank" class="btn btn-sm btn-outline-primary">Trailer</a>
            </td>
                <td>{{ $movie->movie_url }}</td>
                <td>{{ $movie->year }}</td>
                <td>{{ $movie->language }}</td>
                <td>
             @if($movie->genres)
    @foreach($movie->genres as $genre)
        <span class="badge badge-info">{{ $genre->name }}</span>
    @endforeach
@else
    <span class="text-muted">No genres</span>
@endif
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
