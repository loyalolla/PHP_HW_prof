<?php

namespace app\models;

class Good extends Model
{

    public $id;
    public $name;
    public $description;
    public $price;
    public $property = [
        'id' => false,
        'name' => false,
        'description' => false,
        'price' => false
    ];

    public function __construct($name = null, $description = null, $price = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function setName($name)
    {
        $this->property['name'] = true;
        $this->name = $name;
    }

    public function setDescription($description)
    {
        $this->property['description'] = true;
        $this->description = $description;
    }

    public function setPrice($price)
    {
        $this->property['price'] = true;
        $this->price = $price;
    }
    protected function getTableName()
    {
        return 'goods';
    }
}
