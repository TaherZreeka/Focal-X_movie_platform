@extends('content_admin.layout.master')
@section('title', 'review Management')
@section('content')

<div class="content-wrapper "dir="ltr">
<div class="container-fluid">
     <div class="card-header d-flex align-items-center ">
     <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left"style="text-align: right;">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">reviews </li>
          </ol>
        </div>
     </div>
      <div class="card">
   <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-center align-items-center" style="height: 100px;">
                <h6 class="text-white text-capitalize m-0"style="font-size: 32px;">reviews</h6>
              </div>
            </div>

    {{-- عرض رسالة النجاح --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($reviews->count())
     <div class="container-fluid">
    <div class="table-responsive transition-table" id="reviewTableWrapper">
        <table class="table table-bordered table-striped">
            <thead class=" text-center">
                <tr>
                    <th>movie</th>
                    <th>user</th>
                    <th>review</th>
                    <th>the condition</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $review)
                <tr class=" text-center">
                    <td>{{ $review->movie->title ?? 'unknown' }}</td>
                    <td>{{ $review->user->name ?? ' unknown' }}</td>
                    <td>{{ $review->rating }}</td>
                    <td>
                        @if($review->approved)
                            <span class="badge bg-success"> approved</span>
                        @else
                            <span class="badge bg-warning text-dark">Not approved</span>
                        @endif
                    </td>
                    <td class=" text-center">
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        @if(!$review->approved)
                        <form action="{{ route('reviews.approve', $review) }}" method="POST" style="display:inline-block;">
                            @csrf

                            <button type="submit" class="btn btn-sm btn-success mx-2 "><i class="fas fa-check"></i></button>
                        </form>
                        @endif


                        @if($review->approved)
                        <form action="{{ route('reviews.reject', $review) }}" method="POST" style="display:inline-block;">
                            @csrf
                            {{-- @method('PATCH') --}}
                            <button type="submit" class="btn btn-sm btn-warning mx-2"><i class="fas fa-times"></i></button>
                        </form>
                        @endif


                        <form action="{{ route('reviews.destroy', $review) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete the rating?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger mx-2"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
     </div>
        {{ $reviews->links() }}

    @else
        <p>There are no reviews currently.</p>
    @endif
</div>
</div>
</div>
@endsection
