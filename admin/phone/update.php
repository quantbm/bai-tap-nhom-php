<?php

$phone = Phone::find($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $phone->category_id = $_POST['category_id'];
    $phone->name = $_POST['name'];
    $phone->price = $_POST['price'];
    $phone->image = '';
    $phone->screen = $_POST['screen'];
    $phone->after_camera = $_POST['after_camera'];
    $phone->before_camera = $_POST['before_camera'];
    $phone->cpu = $_POST['cpu'];
    $phone->ram = $_POST['ram'];
    $phone->memory = $_POST['memory'];
    $phone->battery = $_POST['battery'];

    Phone::update(
        $phone
    );

    header('Location: admin?phone');
}

 ?>

<ol class="breadcrumb">
    <li><a href="admin">Admin</a></li>
    <li><a href="admin?phone">Điện thoại</a></li>
    <li class="active">Cập nhật điện thoại: <?= $phone->name ?></li>
</ol>

<div class="panel panel-rim">
    <div class="panel-heading">
        <a href="admin?phone" class="go-back">
            <span class="glyphicon glyphicon-arrow-left"></span>
        </a>
        Cập nhật điện thoại: <?= $phone->name ?>

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
                    <h4 class="modal-title" id="myModalLabel">Xóa hãng: <?= $phone->name ?></h4>
                </div>
                <div class="modal-body">
                    Bạn có muốn xóa không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <a href="admin?phone=delete&id=<?= $phone->id ?>" class="btn btn-danger">
                        Xóa
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="panel-body">
        <form action="" method="post" class="form-horizontal">

            <?php include('form.php') ?>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-9">
                    <button type="submit" class="btn btn-blue pull-right">
                        <span class="glyphicon glyphicon-floppy-disk"></span>
                        &nbsp;
                        Cập nhật
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
