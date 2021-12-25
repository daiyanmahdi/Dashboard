@extends('layouts.admin_master')
@include('admin.box.subcategory.subcategory')
@section('title','Sub_Category')
@section('content')

  <div class="card-header">

    <h3 class="card-title">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Add a subcategory
      </button</h3>

    </div>
<div class="card-body table-responsive p-0">
    <table class="table table-head-fixed text-nowrap">
      <thead>
        <tr>
          <th>ID</th>
          <th>Slug</th>
          <th>category</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1;
        @endphp

       @foreach ( $subcategory as $item)

            <tr>

                <td>{{ $i++ }}</td>
                <td>{{ $item->slug }}</td>
                {{-- <td>{{ $item->Category->id }}</td> --}}
                <td>{{ $item->Category->slug }}</td>
                <td>

                    <button
                    type="button"
                    class="btn btn-info btn-sm ediBtn"
                    data-toggle="modal" data-target="#ediModal"
                    data-id="{{ $item->id }}"
                    data-slug="{{ $item->slug }}"
                    data-category_id = "{{ $item->category_id }}"
                    >
                    <i class="fa fa-edit"></i> </button>
                    <form action="{{ route('subcategory.destroy',$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('sure?')" type="submit" class="btn btn-danger btn-sm ">
                            <i class="fas fa-trash"></i>
                        </button>

                    </form>
                </td>
                <td>

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
                    var category_id = $(this).data('category_id');


                    var url = '{{ url('subcategory/') }}/' + id;

                    $('#ediForm [name = slug]').val(slug)
                    $('#ediForm [name = category_id]').val(category_id)

                    $("#ediForm").attr("action", url);
                });
            });


        </script>
    @endpush
