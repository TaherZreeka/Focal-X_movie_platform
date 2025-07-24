@extends('content_admin.layout.master')
 
@section('title', 'Showtimes Management')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">current Showtime</h3>
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
                              
                          </tr>
                      </thead>

                      <tbody>
                          @php $i = 0; @endphp
                         
                              <tr>
                                  <td>{{ ++$i }}</td>
                                  <td>{{ $showtime->movie->title }}</td>
                                  <td>{{ $showtime->date }}</td>
                                  <td>{{ $showtime->time }}</td>
                                  <td>{{ $showtime->hall }}</td>
                                  <td>{{ $showtime->price }}</td>
                                  <td>{{ $showtime->show_type }}</td>
                              </tr>
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

