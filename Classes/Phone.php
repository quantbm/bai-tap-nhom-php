<?php

class Phone extends Model
{
    public static $table = 'phone';

    public $id;

	public $category_id;

	public $name;

	public $screen;

	public $after_camera;

	public $before_camera;

	public $ram;

	public $memory;

	public $battery;

    public function category()
    {
        return $category = $this->mysql->query(
            "select * from category where id = $this->category_id",
            PDO::FETCH_CLASS,
            'Category'
        )->fetch();
    }
}
