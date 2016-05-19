<?php

class Category extends Model
{
	public $id, $name;

	public static function insert($name)
	{
		$mysql = DB::mysql();

		$query = $mysql->prepare('insert into category(name) values(:name)');

		$query->execute([
			'name' => $name
		]);
	}

	public static function update(Category $category)
	{
		$mysql = DB::mysql();

		$query = $mysql->prepare('update category set name = :name where id = :id');

		$query->execute([
			'id'	=> $category->id,
			'name'	=> $category->name
		]);
	}

	public static function deletePhone($category_id)
	{
		$mysql = DB::mysql();

		$query = $mysql->prepare('delete from phone where category_id = :category_id');

		$query->execute([
			'category_id' => $category_id
		]);
	}

	public function amount()
	{
		$amount = $this->mysql->query(
			"select count(*) number from phone where category_id = $this->id"
		)->fetch();

		return $amount['number'];
	}

	public function phones()
	{
		return $this->mysql->query(
			"select * from phone where category_id = $this->id",
			PDO::FETCH_CLASS,
			'Phone'
		);
	}
}
