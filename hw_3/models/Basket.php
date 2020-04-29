<?php

namespace app\models;

class Basket extends Model
{
    public $id;
    public $session_id;
    public $product_id;
    public $property = [
        'id' => false,
        'session_id' => false,
        'product_id' => false
    ];

    public function __construct($session_id = null, $product_id = null)
    {
        $this->session_id = $session_id;
        $this->product_id = $product_id;
    }

    public function setSession_id($session_id)
    {
        $this->property['session_id'] = true;
        $this->session_id = $session_id;
    }

    public function setProduct_id($product_id)
    {
        $this->property['product_id'] = true;
        $this->product_id = $product_id;
    }


    public static function getTableName() {
        return 'basket';
    }

}
