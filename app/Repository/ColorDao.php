<?php

declare(strict_types=1);

namespace App\Repository;

use App\Database\Connection;

class ColorDao
{
    public static function getColors()
    {
        try {
            $sql = "SELECT colors.id AS id,
            colors.color_name AS color
            FROM colors";

            $stmt = Connection::getInstance()->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}
