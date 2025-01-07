<?php

namespace Src\solid\DIP;

use http\Exception\RuntimeException;

class Authentication
{
    private $connection;

    /**
     * @param $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function check(string $username, string $password): bool
    {
        $user=$this->connection->query("SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'");
        if(!$user)
        {
            throw new RuntimeException('User not found');
        }


    }


}
