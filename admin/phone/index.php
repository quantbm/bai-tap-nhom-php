<ol class="breadcrumb">
    <li><a href="admin">Admin</a></li>
    <li class="active">Điện thoại</li>
</ol>

<div class="panel panel-rim">
    <div class="panel-heading">
        Danh sách điện thoại
        <a href="admin?phone=create" class="btn btn-white pull-right">Thêm điện thoại mới</a>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên điện thoại</th>
                    <th>Hãng</th>
                    <th>Giá</th>
                    <th>Tình trạng</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (Phone::all() as $phone): ?>
                    <tr>
                        <td><?= $phone->id ?></td>
                        <td><?= $phone->name ?></td>
                        <td><?= $phone->category()->name ?></td>
                        <td><?= $phone->price ?></td>
                        <td>còn hàng</td>
                        <td>
                            <a href="admin?phone=update&id=<?= $phone->id ?>">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
