@extends('content_admin.layout.master')
 
@section('title', 'Showtimes Management')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Showtimes List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
              <div class="container-fluid">
                <table class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="10px">No</th>
                              <th>MovieName</th>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Hall</th>
                              <th>Price</th>
                              <th>Show Type</th>
                              <th >Actions</th>
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
                                  <td class="text-center">
                                <form action="{{ route('showtimes.destroy', $showtime->id) }}" method="POST" class="d-inline">
                                    <a class="btn btn-info btn-sm" href="{{ route('showtimes.show', $showtime->id) }}" title="Show">
                                        <i class="fa-solid fa-list"></i>
                                    </a>
                                    <a class="btn btn-primary btn-sm" href="{{ route('showtimes.edit', $showtime->id) }}" title="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete"
                                        onclick="return confirm('Are you sure you want to delete this showtime?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                              </tr>
                          @empty
                              <tr>
                                  <td colspan="7" class="text-center">No data available.</td>
                              </tr>
                          @endforelse
                      </tbody>
                </table>
              </div>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    
@endsection

