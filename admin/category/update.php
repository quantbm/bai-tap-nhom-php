<?php

$category = Category::find($_GET['id']);

$name = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category->name = $_POST['name'];

    Category::update($category);

    header('Location: admin?category');
}

 ?>

<ol class="breadcrumb">
    <li><a href="admin">Admin</a></li>
    <li><a href="admin?category">Hãng sản xuất</a></li>
    <li class="active">Cập nhật hãng: <?= $category->name ?></li>
</ol>

<div class="panel panel-rim">
    <div class="panel-heading">
        <a href="admin?category" class="go-back">
            <span class="glyphicon glyphicon-arrow-left"></span>
        </a>
        Cập nhật hãng: <?= $category->name ?>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#delete">
            Xóa
        </button>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Xóa hãng: <?= $category->name ?></h4>
                </div>
                <div class="modal-body">
                    Bạn có muốn xóa không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Không
                    </button>
                    <a href="admin?category=delete&id=<?= $category->id ?>" class="btn btn-danger">
                        Xóa
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="panel-body">
        <form class="form-horizontal" action="" method="post">
            <div class="form-header" style="position:relative;">
                <h3>Thông tin</h3>

            </div>
            <hr>
            <div class="form-group">
                <label for="name" class="col-sm-4 control-label">Tên hãng sản xuất:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?= $category->name ?>" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-6">
                    <button type="submit" class="btn btn-blue">
                        <span class="glyphicon glyphicon-floppy-disk"></span>
                        &nbsp;
                        Cập nhật
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
