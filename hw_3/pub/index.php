<?php

namespace app\pub;

require "../services/Autoload.php";
require "../config/config.php";

use app\services\Autoload;
use app\models\Products;
use app\models\Users;
// use app\models\Orders;


spl_autoload_register([new Autoload(), 'loadClass']);

$product = Products::getOne(16);
$product->setName("Coca-Cola");

$product->save();







