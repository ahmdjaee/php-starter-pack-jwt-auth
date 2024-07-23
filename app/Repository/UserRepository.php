<?php

namespace Root\PHP\MVC\Repository;

require_once __DIR__ . '/../../vendor/autoload.php';

use PDO;
use Root\PHP\MVC\Config\Database;
use Root\PHP\MVC\Domain\Users;

class UserRepository
{
    private PDO $connection;

    public function __construct(Database $database)
    {
        $this->connection = $database->getConnection();
    }
    public function save(Users $users): Users
    {

        $sql = "INSERT INTO users (username, name, password , created_at) VALUES (:username, :name, :password, :created_at)";
        $this->connection->prepare($sql)->execute([
            'username' => $users->username,
            'name' => $users->name,
            'password' => $users->password,
            'created_at' => $users->created_at
        ]);

        return $users;
    }

    public function findByUsername(string $username): ?Users
    {
        $sql = "SELECT * FROM users WHERE username = :username";

        $statement = $this->connection->prepare($sql);

        $statement->execute(['username' => $username]);

        $row = $statement->fetch();

        try {
            if ($row) {
                return new Users(
                    username: $row['username'],
                    name: $row['name'],
                    password: $row['password'],
                    created_at: $row['created_at']
                );
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function removeAll(): void
    {
        $this->connection->exec("DELETE FROM users");
    }
}
