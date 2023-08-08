<?php

declare(strict_types=1);

namespace App\Models;

class UserDao
{
    public function create(User $user)
    {
        try {
            $sql = "INSERT INTO users(name, email) VALUES (?,?)";

            $stmt = Connection::getInstance()->prepare($sql);

            $stmt->bindValue(1, $user->getName());
            $stmt->bindValue(2, $user->getEmail());

            $stmt->execute();
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getUsers()
    {
        try {
            $sql = "SELECT * FROM users";

            $stmt = Connection::getInstance()->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function update(User $user)
    {
        try {
            $sql = "UPDATE users SET name = ?, email = ? WHERE id = ?";

            $stmt = Connection::getInstance()->prepare($sql);

            $stmt->bindValue(1, $user->getName());
            $stmt->bindValue(2, $user->getEmail());
            $stmt->bindValue(3, $user->getId());

            $stmt->execute();
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            $sql = "DELETE FROM users WHERE id = ?";

            $stmt = Connection::getInstance()->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}
