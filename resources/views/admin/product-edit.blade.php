<h4>Edit Product</h4>

<form action="/admin/product-update" method="post" enctype="multipart/form-data">
    <input type="text" name="id" value="{{$product->id}}">
    @csrf
    <div class="mt-2 mb-2">
        <label for="">Product Name</label>
        <input type="text" name="productName" value="{{$product->product_name}}" class="form-control form-control-sm" />
    </div>
    <div class="mt-2 mb-2">
        <label for="">Price</label>
        <input type="text" name="price" value="{{$product->price}}" class="form-control form-control-sm"/>
    </div>
    <div class="mt-2 mb-2">
        <label for="">Description</label>
        <input type="text" name="description" value="{{$product->description}}" class="form-control form-control-sm"/>
    </div>
    <div class="mt-2 mb-2">
        <label for="">Image</label>
        <input type="file" name="image" class="form-control form-control-sm"/>
    </div>
    <div class="mt-2 mb-2">
        <label for="">Category</label>
        <select class="form-control form-control-sm" name="category">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->category_name}}</option>
            @endforeach
        </select>
    </div>
{{--    <div class="mt-2 mb-2">--}}
{{--        <label for="">Type</label>--}}
{{--        <select class="form-control form-control-sm" name="type">--}}
{{--            @foreach ($types as $type)--}}
{{--                <option value="{{$type->id}}">{{$type->type_name}}</option>--}}
{{--            @endforeach--}}
{{--        </select>--}}
{{--    </div>--}}

    <div class="mt-2 mb-2">
        <button class="btn btn-primary btn-sm">Update</button>
    </div>

</form>
