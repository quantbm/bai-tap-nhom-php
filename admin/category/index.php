<ol class="breadcrumb">
    <li><a href="admin">Admin</a></li>
    <li class="active">Hãng sản xuất</li>
</ol>

<div class="panel panel-rim">
    <div class="panel-heading">
        Quản lý hãng sản xuất
        <a href="admin?category=create" class="btn btn-white pull-right">Thêm hãng mới</a>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <caption>Danh sách các hãng</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên hãng sản xuất</th>
                    <th>Số lượng điện thoại</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (Category::all() as $category): ?>
                    <tr>
                        <td><?= $category->id ?></td>
                        <td><?= $category->name ?></td>
                        <td><?= $category->amount() ?></td>
                        <td>
                            <a href="admin?category=update&id=<?= $category->id ?>">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
