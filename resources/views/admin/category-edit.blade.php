
<h4>Edit Category</h4>

<form action="/admin/category-update" method="post">
    @csrf
    <div class="mt-2 mb-2">
        <label for="">Category Name</label>
        <input type="text" name="categoryName" value="{{$category->category_name}}" class="form-control form-control-sm"/>
    </div>

    <div class="mt-2 mb-2">
        <button class="btn btn-primary btn-sm">Update</button>
    </div>

</form>
