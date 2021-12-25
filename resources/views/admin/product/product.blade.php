@extends("layouts.admin_master")
@extends('admin.box.product.product')
@section('title','Dashboard')
@section('content')
<div class="card-header">

    @if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
    @endif

    <h3 class="card-title">  <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary
        btn-sm ">Add a new Product</button></h3>

      <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

          <div class="input-group-append">
            <button type="submit" class="btn btn-default">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </div>
    </div>


    <div class="card-body table-responsive p-0" style="height: auto;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>S/N</th>
              <th>Product name</th>
              <th>Product type</th>
              <th>Image</th>
              <th>Price</th>
              <th>Category id</th>
              <th>Sub Category id</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @php
                  $i=1;
              @endphp
            @foreach ($product as $item)

            <tr>
            <td>{{$i++}}</td>

                @php
                    $path= $item->image == 'default.jpg' ? asset('public/default/default.jpg') : asset('public/uploads/product/'.$item->image);
                @endphp

            <td>{{ $item->product_name }}</td>
              <td>{{ $item->product_type }}</td>

            <td>
                <img src="{{ $path }}" alt="" width="90" height="70">
            </td>
              <td>{{ $item->price }}</td>
              <td>{{ $item->Category->id }}</td>
              <td>{{ $item->SubCategory->id }}</td>
            {{-- <td>{{date('F d, Y H:i',strtotime($item->created_at))}}</td> --}}
              <td>
                    <button
                        type="button"
                        data-toggle="modal"
                        data-target="#ediModal"
                        class="btn btn-info btn-sm ediBtn"
                        data-id = "{{ $item->id }}"
                        data-name = "{{ $item->product_name }}"
                        data-price = "{{ $item->price }}"
                        data-product_type = "{{ $item->product_type }}"
                        data-category_id = "{{ $item->category_id }}"
                        data-sub_category_id = "{{ $item->sub_category_id }}"
                        >
                        <i class="fa fa-edit"></i>
                    </button>

                    <form action="{{ route('product.destroy',$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('sure?')" type="submit" class="btn btn-danger btn-sm ">
                            <i class="fas fa-trash"></i>
                        </button>

                    </form>

                </td>
            </tr>

            @endforeach
          </tbody>
        </table>



    @endsection
    @push('js')
        <script>
            $(function(){
                $('.ediBtn').click(function(){
                    var id = $(this).data('id');
                    var name = $(this).data('name');
                    var price = $(this).data('price');
                    var product_type = $(this).data('product_type');
                    var category_id = $(this).data('category_id');
                    var sub_category_id = $(this).data('sub_category_id');

                    var url = '{{ url('product/') }}/' + id;

                    $('#ediForm [name = product_name]').val(name)
                    $('#ediForm [name = product_type]').val(product_type)
                    $('#ediForm [name = category_id]').val(category_id)
                    $('#ediForm [name = subcategory_id]').val(sub_category_id)
                    $('#ediForm [name = price]').val(price)
                    $('#ediForm [name = id]').val(id)

                    $("#ediForm").attr("action", url);
                });
            });
        </script>
    @endpush
