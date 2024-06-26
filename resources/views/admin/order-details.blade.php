 <div class="order-details">
    <h1>Chi tiết Đơn Hàng</h1>
    <h3>Thông tin đơn hàng</h3>
    <div>
        <p>Order ID: {{ $order->id }}</p>
        <p>Full name: {{ $order->fullname }}</p>
        <p>Address: {{ $order->address }}</p>
        <p>Phone: {{ $order->phone }}</p>
        <p>Total: {{ number_format($order->total) }} VND</p>
        <p>Status: {{ $order->status }}</p>
        <p>Time: {{ $order->created_at }}</p>
    </div>
    <h3>Sản phẩm</h3>
    <table class="table">
        <thead>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price (VND)</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orderItems as $item)
            <tr>
                <td>{{ $item->product_name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ number_format($item->price) }} VND</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<a href="/admin/order-list" class="btn btn-primary">Back to list</a>
