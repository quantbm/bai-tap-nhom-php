<?php
$phone = Phone::find($_GET['id']);
?>

<div class="container">
	<div class="row" style="margin-top:10px;background-color:#f0f0f0;padding:20px 0px">
		<div class="col-md-12">
			<p class="name-product">Điện thoại <?= $phone->name ?></p>
		</div>
		<div class="col-md-4">
			<img src="./img/sp1.png" width="100%" alt="...">
		</div>
		<div class="col-md-4">
			<h4 class="name-active">Thông số kỹ thuật</h4>
			<p><b>Màn hình:</b> <?= $phone->screen ?></p>
			<p><b>Camera sau:</b> <?= $phone->after_camera ?></p>
			<p><b>Camera trước:</b> <?= $phone->before_camera ?></p>
			<p><b>CPU:</b> <?= $phone->cpu ?></p>
			<p><b>RAM:</b> <?= $phone->ram ?></p>
			<p><b>Bộ nhớ trong:</b> <?= $phone->memory ?></p>
			<p><b>Dung lượng pin:</b> <?= $phone->battery ?></p>
		</div>
		<div class="col-md-4">
			<h4 class="name-active">
				Giá: <?= number_format($phone->price)." VNĐ"; ?>
			</h4>
			<p><b>Trong hộp có:</b> Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim</p>
			<p><b>Bảo hành chính hãng:</b> 12 tháng.</p>
			<a href="?page=order&id=<?= $phone->id ?>" class="btn btn-danger">MUA NGAY</a>
			<a href="?page=addtocart&id=<?= $phone->id ?>" class="btn btn-primary">THÊM VÀO GIỎ HÀNG</a>
		</div>
	</div>
</div>
