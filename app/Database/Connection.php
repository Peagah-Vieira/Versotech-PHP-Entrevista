<?php

declare(strict_types=1);

namespace App\Database;

class Connection
{
    private static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new \PDO("sqlite:db.sqlite");
            self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}
