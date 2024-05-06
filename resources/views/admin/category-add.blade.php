@vite(["resources/sass/app.scss", "resources/js/app.js"])
<h4>Add Category</h4>

<form action="/admin/category-save" method="post">
    @csrf
    <div class="mt-2 mb-2">
        <label for="">Category Name</label>
        <input type="text" name="categoryName" class="form-control form-control-sm" />
    </div>

    <div class="mt-2 mb-2">
        <button type="submit" class="btn btn-primary btn-sm">Save</button>
    </div>

</form>
