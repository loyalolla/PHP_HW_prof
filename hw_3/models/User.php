<?php

namespace app\models;

class Users extends Model
{
  public $id;
  public $login;
  public $pass;
  public $property = [
    'id' => false,
    'login' => false,
    'pass' => false
];

  public function __construct($login = null, $pass = null)
    {
        $this->login = $login;
        $this->pass = $pass;
    }

    public function setLogin($name)
    {
        $this->property['login'] = true;
        $this->login = $login;
    }

    public function setPass($pass)
    {
        $this->property['pass'] = true;
        $this->pass = $pass;
    }

  public function getTableName() {
      return 'users';
  }
}
