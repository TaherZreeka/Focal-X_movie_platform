@extends('content_admin.layout.master')


@section('title', 'Showtimes Management')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="flex py-3">
       <a href="{{ route('showtimes.index') }}" class="btn btn-danger p-2 mb-3"><i class="fas fa-trash"></i>All Showtime</a>
        </div>
       <div class="card">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-center align-items-center" style="height: 100px;">
                <h6 class="text-white text-capitalize m-0"style="font-size: 32px;">Show Time List</h6>
              </div>
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
                              <th >Deleted At</th>
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
                                <td class="align-middle text-center">
                               <span class="text-secondary text-xs font-weight-bold">{{ $showtime->deleted_at }}</span>
                              </td>
                              <td class="align-middle">
                              <a class="btn btn-sm btn-primary" href="{{ route('showtimes.restore' ,$showtime) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                              <i class="fa-solid fa-rotate-left" style="font-size: 15px;"></i>
                              </a>


                          <form action="{{ route('showtimes.forcedelete', $showtime) }}" method="POST" style="display:inline;">
                           @csrf
                            @method('DELETE')
                           <button class="btn btn-sm btn-primary"   type="submit" class="text-secondary font-weight-bold text-xs" ><i class="fa-solid fa-trash fa-lg"style="font-size: 15px;"></i></button>
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

