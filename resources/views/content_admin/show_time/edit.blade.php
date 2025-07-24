@extends('content_admin.layout.master')

@section('title', 'Edit Showtime')

@section('content')
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
