<div class="container">

	<div class="row">
		<div class="col-md-7">
			<p class="chon">
				Hãng điện thoại:
				<?php foreach (Category::all() as $category): ?>
					<a href="?page=products&category=<?php echo $category->id; ?>">
						<?php echo $category->name; ?>
					</a>
				<?php endforeach; ?>
			</p>
		</div>
		<div class="col-md-5">
			<p class="chon">
				Mức giá:
					<a href="#">Từ 5 triệu - 10 triệu</a>
                    <a href="#">Từ 10 triệu - 20 triệu</a>
			</p>
		</div>
	</div>

	<div class="row" style="margin-bottom:100px">
    <?php
        if(isset($_GET["category"])){
			$category = Category::find($_GET["category"]);
			foreach ($category->phones() as $phone) {
    ?>
        <div class="col-sm-4 col-md-3 col-xs-6">
            <div class="thumbnail">
                <img src="./img/<?= $phone->image ?>" alt="<?= $phone->name ?>">
                <div class="caption">
                    <h4><?= $phone->name ?></h4>
                    <p><?= number_format($phone->price)." VNĐ" ?></p>
                    <p>
                        <a href="?page=product&id=<?= $phone->id ?>" class="btn btn-primary" role="button">Xem chi tiết</a>
                        <a href="?page=order&id=<?= $phone->id ?>" class="btn btn-success" role="button">Mua</a>
                    </p>
                </div>
            </div>
        </div>
    <?php
	}} else {
        foreach(Phone::all() as $phone) {
    ?>
		<div class="col-sm-4 col-md-3 col-xs-6">
			<div class="thumbnail">
				<img src="./img/<?= $phone->image ?>" alt="<?= $phone->name ?>">
				<div class="caption">
					<h4><?= $phone->name ?></h4>
					<p><?= number_format($phone->price)." VNĐ" ?></p>
					<p>
						<a href="?page=product&id=<?= $phone->id ?>" class="btn btn-primary" role="button">Xem chi tiết</a>
						<a href="?page=order&id=<?= $phone->id ?>" class="btn btn-success" role="button">Mua</a>
					</p>
				</div>
			</div>
		</div>
    <?php
        }}
     ?>
	</div>
</div>
