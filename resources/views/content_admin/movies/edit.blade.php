@extends('content_admin.layout.master')

@section('title', 'Edit movie')

@section('content')

<div class="content-wrapper">
    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add movies</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Add movies</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form method="POST" action="{{ route('movies.update', $movie->id)  }}" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Movies Details</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">title</label>
                                <input type="text" id="title" name="title" class="form-control"
                                    value="{{ old('title',$movie->title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="duration">duration</label>
                                <input type="number" id="duration" name="duration" class="form-control"
                                    value="{{ old('duration',$movie->duration) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">description</label>
                                <input type="text" id="description" name="description" class="form-control"
                                    value="{{ old('description',$movie->description) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="poster_url">poster</label>
                                <input type="url" id="poster" name="poster_url" aaccept="image/*" class="form-control"
                                    value="{{ old('poster_url',$movie->poster_url) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="trailer_url">trailer</label>
                                <input type="url" id="trailer_url" name="trailer_url" aaccept="video/*"
                                    class="form-control" value="{{ old('trailer_url',$movie->trailer_url) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="movie_url">movie</label>
                                <input type="file" id="movie_url" name="movie_url" aaccept="video/*"
                                    class="form-control" value="{{ old('movie_url',$movie->movie_url) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="year">year</label>
                                <input type="number" id="year" name="year" class="form-control"
                                    value="{{ old('year',$movie->year) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="language">language</label>
                                <select id="language" name="language" class="form-control custom-select" required>
                                    <option disabled {{ is_null($movie->language) ? 'selected' : '' }}>Select one
                                    </option>
                                    <option value="Arabic" {{ $movie->language === 'Arabic' ? 'selected' : '' }}>Arabic
                                    </option>
                                    <option value="English" {{ $movie->language === 'English' ? 'selected' : ''
                                        }}>English</option>
                                    <option value="Franch" {{ $movie->language === 'Franch' ? 'selected' : '' }}>Franch
                                    </option>




                                </select>
                            </div>
                            <div class="form-group">
                                <label for="age_rating">age_rating</label>
                                <select id="age_rating" name="age_rating" class="form-control custom-select" required>
                                    <option disabled {{ is_null($movie->age_rating) ? 'selected' : '' }}>Select one
                                    </option>
                                    <option value="PG-13" {{ $movie->age_rating === 'PG-13' ? 'selected' : '' }}>PG-13
                                    </option>
                                    <option value="R" {{ $movie->age_rating === 'R' ? 'selected' : '' }}>R</option>
                                    <option value="NC-17" {{ $movie->age_rating === 'NC-17' ? 'selected' : '' }}>NC-17
                                    </option>
                                    <option value="G" {{ $movie->age_rating === 'G' ? 'selected' : '' }}>G</option>
                                    <option value="PG" {{ $movie->age_rating === 'PG' ? 'selected' : '' }}>PG</option>



                                    G,PG,PG-13,R,NC-17'
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Genre</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>




                        <div class="card-body">
                            <label for="genres">genres</label>
                            <select name="genres[]" multiple required class="w-full border rounded px-3 py-2">
                                @foreach($genres as $genre)
                                <option value="{{ $genre->id }}" {{ in_array($genre->id,$selectGenres ) ? 'selected' :
                                    '' }}>
                                    {{ $genre->name }}
                                </option>
                                @endforeach
                            </select>
                            <p class="text-sm text-gray-500 mt-1">اضغط</p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('movies.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-success float-right">save change</button>
                </div>
            </div>
        </form>
    </section>
</div>
@endsection