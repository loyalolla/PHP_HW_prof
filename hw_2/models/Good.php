<?php

namespace app\models;

class Good extends Model implements DBII
{

    public $id;
    public $name;
    public $description;
    public $price;


    protected function getTableName()
    {
        return 'goods';
    }
}
