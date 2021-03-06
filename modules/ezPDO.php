<?php

namespace Modules;

use PDO;
use PDOException;

class ezPDO
{
    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public static function connect($dbname, $host = "localhost", $user = "root", $password = null)
    {
        return new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);
    }

    public function exec($sql, $data = [])
    {
        try {
            $ex = $this->db->prepare($sql);
            $ex->execute($data);
            return $ex->rowCount();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function read($sql, $data = [], $type = "one")
    {
        $ex = $this->db->prepare($sql);
        $ex->execute($data);
        if ($type == "all") {
            $r = $ex->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $r = $ex->fetch(PDO::FETCH_ASSOC);
        }

        return $r;
    }

    public function lastID()
    {
        return $this->db->lastInsertId();
    }
}
