
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="/css/boostrap.min.css">
<link rel="stylesheet" href="/https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

<h4>User List</h4>
<a href="/admin/user-add" class="btn btn-primary btn-sm">Add</a>
<table class="table table-hover table-bordered table-striped">
    <thead>
    <tr>
        <td>Id</td>
        <td>Full Name</td>
        <td>Phone Number</td>
        <td>Email</td>
        <td>Address</td>


    </tr>
    </thead>
    <tbody>
    @foreach($user as $obj)
        <tr>
            <td>{{ $obj->id }}</td>
            <td>{{ $obj->name}}</td>
{{--            <td>{{ $obj->phone }}</td>--}}
            <td></td>
            <td>{{ $obj->email }}</td>
            <td></td>
{{--            <td>{{ $obj->address }}</td>--}}

            <td class="text-center"><a href="/admin/user-delete/{{ $obj->id }}" class="btn btn-danger btn-sm">Delete</a></td>
            <td class="text-center"><a href="/admin/user-edit/{{ $obj->id }}" class="btn btn-primary btn-sm">Edit</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

