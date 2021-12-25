@section('box')


{{-- create --}}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" id="ediForm" action="{{ route('subcategory.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="modal-body">
            <div class="card-body">



                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug" >
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">Select category</option>
                        @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->slug }}</option>
                        @endforeach

                    </select>
                </div>

            </div>
        </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
    </form>

      </div>
    </div>
  </div>



  {{-- update --}}
<div class="modal fade" id="ediModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" id="ediForm" enctype="multipart/form-data">
        @csrf
            @method('PUT')
        <div class="modal-body">
            <div class="card-body">



                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug" >
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">Select category</option>
                        @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->slug }}</option>
                        @endforeach

                    </select>
                </div>

            </div>
        </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
    </form>

      </div>
    </div>
  </div>

@endsection
