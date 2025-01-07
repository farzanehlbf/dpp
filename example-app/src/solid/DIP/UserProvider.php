<?php

namespace Src\solid\DIP;

use http\Exception\RuntimeException;

class UserProvider implements UserProviderInterface
{
    private $connection;

    /**
     * @param $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }
    public function findUser(string $username):bool
    {
        $user=$this->connection->query("SELECT * FROM `users` WHERE `username`='$username' ");
        if(!$user)
        {
            throw new RuntimeException('User not found');
        }
        return true;
    }


}
