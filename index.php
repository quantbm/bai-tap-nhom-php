<?php

spl_autoload_register(function ($class_name) {
    include 'Classes/' . $class_name . '.php';
});

session_start();

if (empty($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cửa hàng điện thoại di động</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!-- Header -->
        <header class="main-header">
            <nav class="navbar navbar-top navbar-static-top">
                <div class="container">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Shop</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <!-- Menu left -->
                        <ul class="nav navbar-nav">
                            <li><a href="index.php?page=home">Trang chủ</a></li>
                            <li><a href="index.php?page=products">Sản phẩm</a></li>
                            <li><a href="index.php?page=contact">Liên hệ</a></li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Tìm điện thoại">
                            </div>
                            <button type="submit" class="btn btn-default">Tìm kiếm</button>
                        </form>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index?page=cart">
                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                    Giỏ hàng
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pop"></div>
        </header>

        <?php

        Page::get('page')

        ?>
		<div class="footer">
			<div class="container">
				<ul class="nav-footer">
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Examples</a></li>
					<li><a href="#">About</a></li>
				</ul>
				<p>Designed and built with all the love in the world by <a href="#">TiTi</a></p>
			</div>
		</div>


        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
