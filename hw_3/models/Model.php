<?php

/**
 * Class Model
 *
 */

namespace app\models;
use app\servises\Db;

abstract class Model
{
    protected $db;

    abstract protected function getTableName();

    public function __construct(DB $db)
    {
        $this->db = $db;
    }

    public function getOne($id)
    {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = {$id}";
        return $this->db->queryOne($sql);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM {$this->getTableName()}";
        return $this->db->queryAll($sql);
    }
}
