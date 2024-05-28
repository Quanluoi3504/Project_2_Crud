<h4>Product List</h4>
<a href="/admin/product-add" class="btn btn-primary btn-sm">Add</a>

<table class="table table-hover table-bordered table-striped">
    <thead>
    <tr>
        <td>Id</td>
        <td>Product Name</td>
        <td>Price</td>
        <td>Description</td>
        <td>Image</td>
        <td>Category Name</td>
        <td>Type</td>
        <td>Author</td>


    </tr>
    </thead>
    <tbody>
    @foreach($product as $obj)
        <tr>
            <td>{{ $obj->id }}</td>
            <td>{{ $obj->product_name}}</td>
            <td>{{ $obj->price }}</td>
            <td>{{ $obj->description }}</td>
            <td><img height="50" src="/image_product/{{ $obj->image}}" alt=""></td>
            <td>{{ $obj->category_name }}</td>
            <td>{{ $obj->type_name }}</td>
            <td>{{ $obj->author_name }}</td>

            <td class="text-center"><a href="/admin/product-delete/{{ $obj->id }}" class="btn btn-danger btn-sm">Delete</a></td>
            <td class="text-center"><a href="/admin/product-edit/{{ $obj->id }}" class="btn btn-primary btn-sm">Edit</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
