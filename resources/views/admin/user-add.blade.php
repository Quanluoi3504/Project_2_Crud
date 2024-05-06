@vite(["resources/sass/app.scss", "resources/js/app.js"])
<h4>Add User</h4>

<form action="/admin/user-save" method="post">
    @csrf
    <div class="mt-2 mb-2">
        <label for="">User Name</label>
        <input type="text" name="userName" class="form-control form-control-sm" />
    </div>
    <div class="mt-2 mb-2">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control form-control-sm" />
    </div>
    <div class="mt-2 mb-2">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control form-control-sm" />
    </div>

    <div class="mt-2 mb-2">
        <button type="submit" class="btn btn-primary btn-sm">Save</button>
    </div>

</form>
