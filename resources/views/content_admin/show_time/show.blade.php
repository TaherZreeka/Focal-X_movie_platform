@extends('content_admin.layout.master')
 
@section('title', 'Showtimes Management')

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Detail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Project Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Showtime Detail</h3>

          <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
          </div>
        </div>
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

