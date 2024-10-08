<div class="modal fade" id="edit_{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="post" action="{{route('admin.category.update', $category->id)}}">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>

                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input name="name" value="{{$category->name}}" required class="form-control" type="text" placeholder="Category Name">
                    </div>

                    <div class="form-group">
                        <label>Category Status</label>
                        <select required name="status" class="form-control">
                            <option value="">Select Option</option>
                            <option {{$category->status ==  1 ? 'selected' : ''}} value="1">Active</option>
                            <option {{$category->status ==  0 ? 'selected' : ''}} value="0">Inactive</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa fa-cancel"></i> Discard</button>
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </div>
            </div>
        </div>

    </form>
</div>




<div class="modal fade" id="delete_{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="post" action="{{route('admin.category.delete', $category->id)}}">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Category Delete</h5>

                </div>
                <div class="modal-body">
                    Are you sure you want to delete this Category?
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i class="fa fa-cancel"></i> Discard</button>
                        <button type="submit" class="btn btn-danger">Delete Category</button>
                    </div>
                </div>
            </div>

    </form>
</div>
