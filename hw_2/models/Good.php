<?php

namespace app\model;

class Good extends Model implements DBII
{
    use TestT;
    public $id;
    public $name;
    public $description;
    public $price;


    protected function getTableName()
    {
        return 'goods';
    }
}
