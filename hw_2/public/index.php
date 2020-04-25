<?php

namespace app\public;

include dirname(__DIR__) . '/services/Autoloader.php';
spl_autoload_register([new Autoloader(), 'loadClass']);

$bd = new DB();
$user = new Good($bd);
echo $user->getAll();
echo '<br>';
echo $user->getOne(12);

var_dump($user->getCountTest());





