@vite(["resources/sass/app.scss", "resources/js/app.js"])
<h4>Add Product</h4>

<form action="/admin/product-save" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mt-2 mb-2">
        <label for="">Product Name</label>
        <input type="text" name="productName" class="form-control form-control-sm" />
    </div>
    <div class="mt-2 mb-2">
        <label for="">Price</label>
        <input type="text" name="price" class="form-control form-control-sm" />
    </div>
    <div class="mt-2 mb-2">
        <label for="">Quantity</label>
        <input type="text" name="quantity" class="form-control form-control-sm" />
    </div>
    <div class="mt-2 mb-2">
        <label for="">Description</label>
        <input type="text" name="description" class="form-control form-control-sm" />
    </div>
    <div class="mt-2 mb2">
        <label for="">Image</label>
        <input type="file" name="image" class="form-control form-control-sm" />
    </div>
    <div class="mt-2 mb-2">
        <label for="">Category</label>
        <select name="categoryId" id="" class="form-select form-select-sm">
            <option value="0">Chon Category</option>
            @foreach ($categories as $obj)
                <option value="{{$obj->id}}">{{$obj->category_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-2 mb-2">
        <label for="">Type</label>
        <select name="typeId" id="" class="form-select form-select-sm">
            <option value="0">Chon Type</option>
            @foreach ($types as $obj)
                <option value="{{$obj->id}}">{{$obj->type_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-2 mb-2">
        <label for="">Author</label>
        <select name="authorId" id="" class="form-select form-select-sm">
            <option value="0">Chon Tac Gia</option>
            @foreach ($authors as $obj)
                <option value="{{$obj->id}}">{{$obj->author_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-2 mb-2">
        <button type="submit" class="btn btn-primary btn-sm">Save</button>
    </div>

</form>
