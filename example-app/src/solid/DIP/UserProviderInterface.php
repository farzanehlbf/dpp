<?php

namespace Src\solid\DIP;

interface UserProviderInterface
{
    public function findUser(string $username):bool;

}
