<?php

class Category extends Model
{
	public $id;

	public $name;

	public function amount()
	{
		$amount = $this->mysql->query(
			"select count(*) number from phone where category_id = $this->id"
		)->fetch();

		return $amount['number'];
	}

	public static function insert($name)
	{
		$mysql = Database::getInstance()->connection;

		$stmt = $mysql->prepare('insert into category(name) values(?)');

		$stmt->execute([
			$name
		]);
	}
}
