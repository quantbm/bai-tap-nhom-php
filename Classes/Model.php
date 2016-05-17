<?php

class Model
{
    protected $mysql;

    public function __construct()
    {
        $this->mysql = DB::mysql();
    }

    public static function all()
    {
        $mysql = DB::mysql();

        $class = get_called_class();

        $table = isset($class::$table) ? $class::$table : $class;

        return $products = $mysql->query(
            "select * from `$table`",
            PDO::FETCH_CLASS,
            $class
        );
    }

    public static function find($id)
	{
		$mysql = DB::mysql();

        $class = get_called_class();

        $table = isset($class::$table) ? $class::$table : $class;

		$query = $mysql->prepare("select * from $table where id = :id");
        
		$query->setFetchMode(PDO::FETCH_CLASS, $class);

		$query->execute([
            'id'    => $id
		]);

		return $query->fetch();
	}

    public static function delete($id)
    {
        $mysql = DB::mysql();

        $class = get_called_class();

        $table = isset($class::$table) ? $class::$table : $class;

		$query = $mysql->prepare("delete from $table where id = :id");

		$query->execute([
            'id'    => $id
		]);
    }
}
