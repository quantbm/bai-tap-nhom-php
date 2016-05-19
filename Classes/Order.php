<?php

class Order extends Model
{
	public $id;

	public $name;

	public $address;

	public $phone_number;

	public static function insert(Order $order)
	{
		$mysql = DB::mysql();

		$query = $mysql->prepare(
			'insert into `order`(name, phone_number, address, price) '.
			'values(:name, :phone_number, :address, :price)'
		);

		$query->execute([
			'name' 			=> $order->name,
			'phone_number' 	=> $order->phone_number,
			'address' 		=> $order->address,
			'price' 		=> $order->price
		]);
	}
}
