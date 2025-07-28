@extends('content_admin.layout.master')

@section('title', 'Edit Showtime')

@section('content')

<div class="content-wrapper">
  <!-- Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Showtime</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">Edit Showtime</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Form Content -->
  <section class="content">
    <form action="{{ route('showtimes.update', $showtime->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Showtime Details</h3>
               <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" class="form-control" value="{{ old('date', $showtime->date) }}">
              </div>

              <div class="form-group">
                <label for="time">Time</label>
                <input type="time" name="time" class="form-control" value="{{ old('time', $showtime->time) }}">
              </div>

              <div class="form-group">
                <label for="hall">Hall</label>
                <input type="text" id="hall" name="hall" class="form-control"
                       value="{{ old('hall', $showtime->hall) }}" required>
              </div>

              <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" id="price" name="price" class="form-control"
                       value="{{ old('price', $showtime->price) }}" required>
              </div>

              <div class="form-group">
                <label for="type">Showtime Type</label>
                    <select name="show_type" class="form-control custom-select" required>
                            <option disabled {{ is_null($showtime->show_type) ? 'selected' : '' }}>Select one</option>
                            <option value="morning" {{ $showtime->show_type->value === 'morning' ? 'selected' : '' }}>Morning</option>
                            <option value="evening" {{ $showtime->show_type->value === 'evening' ? 'selected' : '' }}>Evening</option>
                            <option value="weekend" {{ $showtime->show_type->value === 'weekend' ? 'selected' : '' }}>Weekend</option>
                            <option value="vip" {{ $showtime->show_type->value === 'vip' ? 'selected' : '' }}>VIP</option>
                    </select>
              </div>
            </div>
          </div>
        </div>

        <!-- Movie Selection -->
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Movie</h3>
               <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="movie_id">Movie</label>
                <select id="movie_id" name="movie_id" class="form-control" required>
                  <option disabled>Select a movie</option>
                  @foreach($movies as $movie)
                    <option value="{{ $movie->id }}" {{ old('movie_id', $showtime->movie_id) == $movie->id ? 'selected' : '' }}>
                      {{ $movie->title }}
                    </option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Submit Buttons -->
      <div class="row">
        <div class="col-12">
          <a href="{{ route('showtimes.index') }}" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-success float-right">Save Changes</button>
        </div>
      </div>
    </form>
  </section>
<div class="card mt-5 text-start" dir="ltr">
    <h2 class="card-header">Edit Showtime</h2>
    <div class="card-body">

        <form action="{{ route('showtimes.update', $showtime->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="movie" class="form-label"><strong>Movie:</strong></label>
                <select name="movie_id" id="movie" class="form-control" required>
                    @foreach($movies as $movie)
                        <option value="{{ $movie->id }}" {{ $showtime->movie_id == $movie->id ? 'selected' : '' }}>
                            {{ $movie->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label"><strong>Date:</strong></label>
                <input type="date" name="date" class="form-control" value="{{ $showtime->date }}" required>
            </div>

            <div class="mb-3">
                <label for="time" class="form-label"><strong>Time:</strong></label>
                <input type="time" name="time" class="form-control" value="{{ $showtime->time }}" required>
            </div>

            <div class="mb-3">
                <label for="hall" class="form-label"><strong>Hall:</strong></label>
                <input type="text" name="hall" class="form-control" value="{{ $showtime->hall }}" required>
            </div>

            <div class="mb-3">
                <label for="show_type" class="form-label"><strong>Show Type:</strong></label>
                <select name="show_type" id="show_type" class="form-control" required>
                    @foreach(\App\Enums\ShowTypeEnum::cases() as $type)
                        <option value="{{ $type->value }}" {{ $showtime->show_type === $type->value ? 'selected' : '' }}>
                            {{ ucfirst($type->value) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label"><strong>Price:</strong></label>
                <input type="number" name="price" class="form-control" step="0.01" value="{{ $showtime->price }}" required>
            </div>

            <button type="submit" class="btn btn-success"><i class="fa-solid fa-check"></i> Update Showtime</button>
        </form>
    </div>
</div>
@endsection
