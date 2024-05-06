
<h4>Category List</h4>
<a href="/admin/category-add" class="btn btn-primary btn-sm">Add</a>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <td>Id</td>
            <td>Category Name</td>

        </tr>
    </thead>
    <tbody>
        @foreach($categories as $obj)
            <tr>
                <td>{{$obj->id}}</td>
                <td>{{$obj->category_name}}</td>

                <td class="text-center"><a href="/admin/category-delete/{{$obj->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                <td class="text-center"><a href="/admin/category-edit/{{$obj->id}}" class="btn btn-primary btn-sm">Edit</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
