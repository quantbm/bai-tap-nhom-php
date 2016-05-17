<?php

$phone = new Phone();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_FILES['image']['size'] > 0) {
        $mine = explode('/', $_FILES["image"]['type'])[1];
        $file_name = time() . '.' . $mine;
        $target_file = '../img/' . $file_name;
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        $phone->image = $file_name;
    }

    $phone->category_id = $_POST['category_id'];
    $phone->name = $_POST['name'];
    $phone->price = $_POST['price'];
    $phone->screen = $_POST['screen'];
    $phone->after_camera = $_POST['after_camera'];
    $phone->before_camera = $_POST['before_camera'];
    $phone->cpu = $_POST['cpu'];
    $phone->ram = $_POST['ram'];
    $phone->memory = $_POST['memory'];
    $phone->battery = $_POST['battery'];

    Phone::insert(
        $phone
    );

    header('Location: admin?phone');
}

 ?>

<ol class="breadcrumb">
    <li><a href="admin">Admin</a></li>
    <li><a href="admin?phone">Điện thoại</a></li>
    <li class="active">Thêm mới</li>
</ol>

<div class="panel panel-rim">
    <div class="panel-heading">
        <a href="admin?phone" class="go-back">
            <span class="glyphicon glyphicon-arrow-left"></span>
        </a>
        Thêm điện thoại mới
    </div>
    <div class="panel-body">
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

            <?php include('form.php'); ?>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-9">
                    <button type="submit" class="btn btn-blue pull-right">
                        <span class="glyphicon glyphicon-floppy-disk"></span>
                        &nbsp;
                        Thêm
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
