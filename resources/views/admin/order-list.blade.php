<h4><a href="/admin/order-list">Order List</a></h4>

{{--<a href="/admin/order-list/PENDING" class="btn btn-info btn-sm">pending</a>--}}
{{--<a href="/admin/order-list/CONFIRMED" class="btn btn-success btn-sm">confirmed</a>--}}
{{--<a href="/admin/order-list/SHIPPING" class="btn btn-warning btn-sm">shipping</a>--}}
{{--<a href="/admin/order-list/RECEIVEED" class="btn btn-info btn-sm">received</a>--}}

<table class="table table-hover table-bordered table-striped">
    <thead>
    <tr>
        <td>Id</td>
        <td>Full Name</td>
        <td>Address</td>
        <td>Phone</td>
        <td>Total</td>
        <td>Status</td>


    </tr>
    </thead>
    <tbody>
    @foreach($order as $obj)
        <tr>
            <td>{{$obj->id}}</td>
            <td>{{$obj->fullname}}</td>
            <td>{{$obj->address}}</td>
            <td>{{$obj->phone}}</td>
            <td>{{$obj->total}}</td>
            <td>{{$obj->status}}</td>
            <td class="text-center">
                <a href="{{ url('/admin/order-details/'.$obj->id) }}" class="btn btn-outline-info btn-sm">Details</a>
            </td>

            @if($obj->status == "PENDING")
                <td class="text-center"><a href="/admin/order-update-status/{{$obj->id}}/CANCLE" class="btn btn-danger btn-sm">Cancle</a></td>
                <td class="text-center"><a href="/admin/order-update-status/{{$obj->id}}/CONFIRMED" class="btn btn-primary btn-sm">Confirmed</a></td>
            @endif

            @if($obj->status == "CONFIRMED")
                <td class="text-center"><a href="/admin/order-update-status/{{$obj->id}}/SHIPPING" class="btn btn-primary btn-sm">Shipping</a></td>
            @endif

        </tr>
    @endforeach
    </tbody>
</table>


