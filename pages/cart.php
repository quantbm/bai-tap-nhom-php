<?php

$cart = $_SESSION['cart'];

 ?>

<form action="" method="post">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Giỏ hàng</h1>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Tên điện thoại</th>
                        <th>Hãng</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart as $key => $id): $phone = Phone::find($id); ?>
                        <tr>
                            <td><?= $phone->name ?></td>
                            <td><?= $phone->category()->name ?></td>
                            <td><?= $phone->price ?></td>
                            <td>
                                <input type="text" name="phone_<?= $phone->id ?>" value="1" class="form-control" size="5">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label for="name">Họ và tên người nhận</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Số điện thoại</label>
                    <input type="text" name="phone_number" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Địa chỉ</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Đặt hàng</button>
            </div>
        </div>
    </div>
</form>
