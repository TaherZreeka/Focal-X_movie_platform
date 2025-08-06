@extends('content_admin.layout.master')

 
 
@section('title', 'movie Management')

@section('content')

<div class="content-wrapper" dir="ltr">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>movie List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">movie</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">movie</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>

      <div class="card-body p-0">
        <table class="table table-striped projects text-center">
          <thead>
            <tr>

            
            <th></th>
              <th>#</th>
              
              <th>title</th>
              <th>duration</th>
              <th>description</th>
              <th>poster</th>
              <th>trailer</th>
              <th>Movie</th>
              <th>year</th>
              <th>language</th>
              <th>genre</th>
              
            </tr>
          </thead>
          <tbody>
            @php $i = 0; @endphp
            @forelse ($movies as $movie)
              <tr>
<td>  </td>

                <td>{{ ++$i }}</td>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->duration }}</td>
                <td>{{ $movie->description }}</td>
                <td>{{ $movie->poster_url }}</td>
                <td>{{ $movie->trailer_url }}</td>
                <td>{{ $movie->movie_url }}</td>
                <td>{{ $movie->year }}</td>
                <td>{{ $movie->language }}</td>
                <td>{{ $movie->genre }}</td>
                <td>
                  <a class="btn btn-primary btn-sm" href="{{ route('movies.show', $movie->id) }}">
                    <i class="fas fa-eye"></i> View
                  </a>
                  <a class="btn btn-info btn-sm" href="{{ route('movies.edit', $movie->id) }}">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                  <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this movie?')" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash"></i> Delete
                    </button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="8" class="text-muted">No movies available.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>


  
    
@endsection




