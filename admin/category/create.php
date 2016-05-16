<?php
$name = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];

    Category::insert($name);

    header('Location: admin/index?category');
}

 ?>

<ol class="breadcrumb">
    <li><a href="admin">Admin</a></li>
    <li><a href="admin?category">Hãng sản xuất</a></li>
    <li class="active">Thêm mới</li>
</ol>

<div class="panel panel-rim">
    <div class="panel-heading">
        <a href="admin?phone" class="go-back">
            <span class="glyphicon glyphicon-arrow-left"></span>
        </a>
        Thêm hãng sản xuất
    </div>
    <div class="panel-body">
        <form class="form-horizontal" action="" method="post">
            <h3>Thông tin</h3>
            <hr>
            <div class="form-group">
                <label for="name" class="col-sm-4 control-label">Tên hãng sản xuất:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-6">
                    <button type="submit" class="btn btn-blue">
                        <span class="glyphicon glyphicon-floppy-disk"></span>
                        &nbsp;
                        Thêm
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
