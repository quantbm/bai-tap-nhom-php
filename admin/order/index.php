<ol class="breadcrumb">
    <li><a href="admin">Admin</a></li>
    <li class="active">Đơn hàng</li>
</ol>

<div class="panel panel-rim">
    <div class="panel-heading">
        Đơn hàng
        <a href="admin?order=create" class="btn btn-white pull-right">Thêm đơn hàng</a>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <caption>Danh sách đơn hàng</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Khách hàng</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (Order::all() as $order): ?>
                    <tr>
                        <td><?= $order->id ?></td>
                        <td><?= $order->name ?></td>
                        <td><?= $order->address ?></td>
                        <td><?= $order->phone_number ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
