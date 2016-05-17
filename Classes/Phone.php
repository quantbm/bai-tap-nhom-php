<?php

class Phone extends Model
{
    public $id, $category_id, $name;

    public $screen, $after_camera, $before_camera, $cpu, $ram, $memory, $battery;

    public static function insert(Phone $phone)
    {
        $mysql = DB::mysql();

        $query = $mysql->prepare(
            'insert into phone(category_id, name, price, image, screen, after_camera, before_camera, cpu, ram, memory, battery)'.
            'values(:category_id, :name, :price, :image, :screen, :after_camera, :before_camera, :cpu, :ram, :memory, :battery)'
        );
        var_dump($query);
        $query->execute([
            'category_id' => $phone->category_id,
            'name' => $phone->name,
            'price' => $phone->price,
            'image' => $phone->image,
            'screen' => $phone->screen,
            'after_camera' => $phone->after_camera,
            'before_camera' => $phone->before_camera,
            'cpu' => $phone->cpu,
            'ram' => $phone->ram,
            'memory' => $phone->memory,
            'battery' => $phone->battery,
        ]);
    }

    public static function update(Phone $phone)
    {
        $mysql = DB::mysql();

        $query = $mysql->prepare(
            'update phone '.
            'set category_id = :category_id, name = :name, price = :price, '.
            'image = :image, screen = :screen, after_camera = :after_camera, before_camera = :before_camera, cpu = :cpu, ram = :ram, memory = :memory, battery = :battery '.
            'where id = :id'
        );

        $query->execute([
            'id' => $phone->id,
            'category_id' => $phone->category_id,
            'name' => $phone->name,
            'price' => $phone->price,
            'image' => $phone->image,
            'screen' => $phone->screen,
            'after_camera' => $phone->after_camera,
            'before_camera' => $phone->before_camera,
            'cpu' => $phone->cpu,
            'ram' => $phone->ram,
            'memory' => $phone->memory,
            'battery' => $phone->battery,
        ]);
    }

    public function category()
    {
        return $category = $this->mysql->query(
            "select * from category where id = $this->category_id",
            PDO::FETCH_CLASS,
            'Category'
        )->fetch();
    }
}
