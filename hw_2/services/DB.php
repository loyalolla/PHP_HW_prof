<?php

namespace app\services;

class DB implements DBI, DBII
{
    public function queryOne($sql, $param = []) {
        return [];
    }
    public function queryAll($sql, $param = []) {
        return [];
    }
}
