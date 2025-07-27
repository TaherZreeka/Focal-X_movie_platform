@extends('content_admin.layout.master')
<<<<<<< HEAD

=======
 
>>>>>>> origin/raghad
@section('title', 'Add Showtime')

@section('content')

<<<<<<< HEAD
<div class="content-wrapper" dir="ltr">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Showtime</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">Add Showtime</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <form action="{{ route('showtimes.store') }}" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Showtime Details</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="time">Time</label>
                <input type="time" id="time" name="time" class="form-control" value="{{ old('time') }}" required>
              </div>
              <div class="form-group">
                <label for="hall">Hall</label>
                <input type="text" id="hall" name="hall" class="form-control" value="{{ old('hall') }}" required>
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" id="price" name="price" class="form-control" value="{{ old('price') }}" required>
              </div>
              <div class="form-group">
                <label for="show_type">Showtime Type</label>
                <select id="show_type" name="show_type" class="form-control custom-select" required>
                  <option selected disabled>Select one</option>
                  <option value="morning" {{ old('show_type') == 'morning' ? 'selected' : '' }}>Morning</option>
                  <option value="evening" {{ old('show_type') == 'evening' ? 'selected' : '' }}>Evening</option>
                  <option value="weekend" {{ old('show_type') == 'weekend' ? 'selected' : '' }}>Weekend</option>
                  <option value="vip" {{ old('show_type') == 'vip' ? 'selected' : '' }}>VIP</option>
                </select>
=======
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <form action="{{ route('showtimes.store') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Showtime </h3>
              </div>
              <div class="card-body">
                
                <div class="form-group">
                  <label for="movie">Movie</label>
                  <select name="movie_id" id="movie" class="form-control" required>
                      <option value="" disabled selected>Select Movie</option>
                      @foreach($movies as $movie)
                          <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                      @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="date">Date</label>
                  <input type="date" id="date" name="date" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="time">Time</label>
                  <input type="time" id="time" name="time" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="hall">Hall</label>
                  <input type="text" id="hall" name="hall" class="form-control" placeholder="e.g., Hall 1" required>
                </div>

                <div class="form-group">
                    <label for="show_type">Show Type</label>
                    <select name="show_type" id="show_type" class="form-control" required>
                        @foreach(\App\Enums\ShowTypeEnum::cases() as $type)
                            <option value="{{ $type->value }}">{{ ucfirst($type->value) }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="number" id="price" name="price" class="form-control" step="0.01" required>
                </div>

>>>>>>> origin/raghad
              </div>
            </div>
          </div>
        </div>

<<<<<<< HEAD
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Movie</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="movie_id">Movie</label>
                <select id="movie_id" name="movie_id" class="form-control" required>
                  <option selected disabled>Select a movie</option>
                  @foreach($movies as $movie)
                    <option value="{{ $movie->id }}" {{ old('movie_id') == $movie->id ? 'selected' : '' }}>
                      {{ $movie->title }}
                    </option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Buttons -->
      <div class="row">
        <div class="col-12">
          <a href="{{ route('showtimes.index') }}" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-success float-right">Create Showtime</button>
        </div>
      </div>
    </form>
  </section>
</div>

@endsection
=======
        <!-- Submit -->
        <div class="row">
          <div class="col-12">
            <a href="{{ route('showtimes.index') }}" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Add Showtime" class="btn btn-success float-right">
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

>>>>>>> origin/raghad
