
    <h4>Statistic</h4>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="mt-1 p-3 bg-primary text-white rounded">
                    <h6>Doanh Thu Lớn Nhất Theo Tháng</h6>
                    <p>Tháng: {{ $obj1->month  }}</p>
                    <p>Tổng: {{ $obj1->revenue }} đ</p>
                </div>
            </div>

            <div class="col-3">
                <div class="mt-1 p-3 bg-primary text-white rounded">
                    <h6>Doanh Thu Lớn Nhất Theo Nam</h6>
                    <p>year: {{ $obj2->year  }}</p>
                    <p>Tổng: {{ $obj2->revenue }} đ</p>
                </div>
            </div>
        </div>
    </div>
