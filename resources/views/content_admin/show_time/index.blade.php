@extends('content_admin.layout.master')

@section('title', 'Showtimes Management')

@section('content')

<div class="content-wrapper" dir="ltr">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Showtimes List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">Showtimes</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Showtimes</h3>
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
              <th>#</th>
              <th>Movie Title</th>
              <th>Date</th>
              <th>Time</th>
              <th>Hall</th>
              <th>Price</th>
              <th>Show Type</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @php $i = 0; @endphp
            @forelse ($showtimes as $showtime)
              <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $showtime->movie->title }}</td>
                <td>{{ $showtime->date }}</td>
                <td>{{ $showtime->time }}</td>
                <td>{{ $showtime->hall }}</td>
                <td>{{ $showtime->price }}</td>
                <td>{{ $showtime->show_type }}</td>
                <td>
                  <a class="btn btn-primary btn-sm" href="{{ route('showtimes.show', $showtime->id) }}">
                    <i class="fas fa-eye"></i> View
                  </a>
                  <a class="btn btn-info btn-sm" href="{{ route('showtimes.edit', $showtime->id) }}">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                  <form action="{{ route('showtimes.destroy', $showtime->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this showtime?')" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash"></i> Delete
                    </button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="8" class="text-muted">No showtimes available.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>

@endsection
