@extends('layouts.admin_master')
@include('admin.box.category.category')
@section('title','Category')
@section('content')

@if(Session::has('message'))
<div class="alert alert-success">
    {{Session::get('message')}}
</div>
@endif

  <div class="card-header">

    <h3 class="card-title">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Add a category
      </button</h3>

    </div>
<div class="card-body table-responsive p-0">
    <table class="table table-head-fixed text-nowrap">
      <thead>
        <tr>
          <th>ID</th>
          <th>Slug</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1;
        @endphp

       @foreach ( $category as $item)

        <tr>

          <td>{{ $i++ }}</td>
          <td>{{ $item->slug }}</td>
          <td>
              {{-- <button href="" class="btn btn-info" data-toggle="modal" data-target="#ediModal"> <i class="far fa-edit"></i> </button> --}}
              <button type="button" class="btn btn-info ediBtn" data-toggle="modal" data-target="#ediModal"
              data-id="{{ $item->id }}"
              data-slug="{{ $item->slug }}">
                <i class="far fa-edit"></i>
              </button>
              <form action="{{ route('category.destroy',$item->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button onclick="return confirm('Sure?')" type="submit" class="btn btn-danger">
                <i class="fas fa-trash"></i>
              </button>
              </form>
          </td>

        </tr>

        @endforeach

      </tbody>
    </table>
  </div>




@endsection
@push('js')

<script>
    $(function(){
        $('.ediBtn').click(function(e){
            var id = $(this).data('id');
            var slug = $(this).data('slug');


            var url = '{{ url('category/') }}/' + id;

            $('#ediForm [name = slug]').val(slug)

            $('#ediForm [name = id]').val(id)

            $("#ediForm").attr("action", url);
        });
    });
</script>

@endpush
