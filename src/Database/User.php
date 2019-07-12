<?php

namespace App\GraphQL\Database;

use App\GraphQL\Connection;

class User
{
    public static function insert($name, $email, $active)
    {
        $pdo = Connection::get();

        $sql = 'INSERT INTO `users` (`name`, `email`, `active`) VALUES (?, ?, ?);';

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $name,
            $email,
            $active
        ]);

        $sql = 'SELECT * FROM `users` WHERE id=?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $pdo->lastInsertId()
        ]);

        return $stmt->fetch();
    }

    public static function first($id, $info)
    {
        $pdo = Connection::get();

        $allowed_fields = [
            'name',
            'email',
        ];

        $fields = $info->getFieldSelection();
        $sql = createSelectSql('users', $fields, $allowed_fields, 'WHERE id=?');

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $id
        ]);

        return $stmt->fetch();
    }
}
