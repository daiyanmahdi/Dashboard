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
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">

                <div class="card-body">



                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="product_name" placeholder="Enter name">
                    </div>

                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" class="form-control" placeholder="Enter type" name="product_type">
                    </div>

                    <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">Select category</option>
                            @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->slug }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Sub Category</label>
                        <select name="subcategory_id" id=""  class="form-control">
                            <option value="">Select subcategory</option>
                            @foreach ($sub_categories as $item)
                                <option value="{{ $item->id }}">{{ $item->slug }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" value="0" min="0" name="price">
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" onchange="document.getElementById('previewImage').src = window.URL.createObjectURL(this.files[0])">
                    </div>

                    <div class="form-group">
                        <img src="" width="100" height="100" alt="images" id="previewImage"/>
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
