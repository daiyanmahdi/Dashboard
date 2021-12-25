@extends("layouts.admin_master")
@section('title','Review')
@section('content')
<div class="card-body table-responsive p-0" style="height: 300px;">
    <table class="table table-head-fixed text-nowrap">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Review</th>
          <th>Status</th>
          <th>Rating</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1;
        @endphp

       @foreach ($review as $item)

        <tr>

          <td>{{ $i++ }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->review }}</td>
          <td>{{ $item->status }}</td>
          <td>{{ $item->rating }}</td>
          <td>
              <a href="" class="btn btn-info"> <i class="far fa-edit"></i> </a>
              <a href="" class="btn btn-danger"> <i class="fas fa-trash"></i> </a>
          </td>

        </tr>

        @endforeach

      </tbody>
    </table>
  </div>
@endsection
