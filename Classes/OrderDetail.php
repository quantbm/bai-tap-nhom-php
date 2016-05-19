<?php

class OrderDetail extends Model
{
	public $id;

	public $order_id;

	public $phone_id;

	public $amount;

	public $price;

	public static function insert(OrderDetail $orderDetail)
	{
		$mysql = DB::mysql();

		$query = $mysql->prepare(
			'insert into `order_detail`(order_id, phone_id, amount, price) '.
			'values(:order_id, :phone_id, :amount, :price)'
		);

		$query->execute([
			'order_id'	=> $orderDetail->order_id,
			'phone_id' 	=> $orderDetail->phone_id,
			'amount' 	=> $orderDetail->amount,
			'price' 	=> $orderDetail->price
		]);
	}

	public function phone()
	{
		return $this->mysql->query(
			"select * from `phone` where id = $this->phone_id"
		)->fetch();
	}
}
