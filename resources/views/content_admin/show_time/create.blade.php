@extends('content_admin.layout.master')
 
@section('title', 'Add Showtime')

@section('content')

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

              </div>
            </div>
          </div>
        </div>

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

