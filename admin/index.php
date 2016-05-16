<?php
spl_autoload_register(function ($class_name) {
    include '../Classes/' . $class_name . '.php';
});
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    <body>

        <div class="top-bar"></div>

        <div class="container">

            <?php include('navbar-top.php') ?>

            <?php include('content.php') ?>

        </div>

        <script src="http://code.jquery.com/jquery.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
    </body>
</html>
