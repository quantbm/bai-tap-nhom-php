<?php
    $phone = Phone::find($_GET['id']);
?>
<form action="" method="POST" class="form-horizontal">
<div class="container">
    <div class="row" style="margin-top:10px">
        <div class="col-md-8 col-sm-offset-2">
            <table class="table">
              <tr>
                  <h3 align="center">Đặt hàng sản phẩm "<?= $phone->name ?>"</h3>
                  <td><b>Tên điện thoại</b></td>
                   <td><b>Hãng sản xuất</b></td>
                  <td><b>Giá / Sản phẩm</b></td>
                  <td><b>Số lượng</b></td>
              </tr>
              <tr>
                  <td><?= $phone->name ?></td>
                  <td><?= $phone->category()->name ?></td>
                  <td><?= number_format($phone->price)." VNĐ" ?></td>
                  <td>
                      <input type="text" class="form-control" size="5" name="sluong" value="1"/>
                  </td>
              </tr>
              <tr><td colspan="5"></td></tr>
            </table>
            <?php
            if(isset($_POST["order"])) {
                $order = new Order();

                $order->name         = $_POST["name"];
                $order->phone_number = $_POST["phone_number"];
                $order->address      = $_POST["address"];
                if(strlen($order->name) < 5){
                    echo "Lỗi : Vui lòng nhập Họ tên đầy đủ để đặt hàng";
				}else if(strlen($order->address) < 5){
	                echo "Lỗi : Vui lòng nhập địa chỉ đầy đủ và chính xác để nhận hàng";
				}
                else if(!is_numeric($order->phone_number) || strlen($order->phone_number) <= 9) {
                   echo "Lỗi : Số điện thoại không tồn tại";
                } else {
                    $order->price = $_POST["sluong"] * $phone->price;

                    Order::insert($order);

                    $order_detail = new OrderDetail();
                    $order_detail->order_id = DB::mysql()->lastInsertId();
                    $order_detail->phone_id = $phone->id;
                    $order_detail->amount = $_POST["sluong"];
                    $order_detail->price = $phone->price;

                    OrderDetail::insert($order_detail);

                    echo "Đặt hàng thành công";
                }
            }
            ?>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ và tên:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="name" placeholder="Nhập họ tên đầy đủ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số điện thoại:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="phone_number" placeholder="Nhập số điện thoại">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Địa chỉ:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                        <button type="submit" name="order" class="btn btn-primary">Mua hàng</button>
                        <a href="?page=products" class="btn btn-danger">Hủy</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
