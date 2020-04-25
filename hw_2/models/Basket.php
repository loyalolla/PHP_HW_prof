<?php

namespace app\models;

class Basket extends Model
{
    public $id;
    public $name;
    public $quantity;
    public $price;
    public $total;

    public function getTableName() {
        return 'basket';
    }

}
