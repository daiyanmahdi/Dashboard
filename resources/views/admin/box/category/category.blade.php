@section('box')
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add a new product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">

                        <div class="card-body">



                            <div class="form-group">
                                <label> Slug</label>
                                <input type="text" class="form-control" name="slug" placeholder="Enter slug">
                            </div>





                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="ediModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit product</h5>
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
                        <label> Slug</label>
                        <input type="text" class="form-control" name="slug" placeholder="Enter slug">
                    </div>




                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
</div>

@endsection
