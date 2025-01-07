<?php

namespace Src\solid\DIP;

use http\Exception\RuntimeException;

class Authentication
{
    private $userProvider;

    /**
     * @param UserProviderInterface $userProvider
     */
    public function __construct(UserProviderInterface $userProvider)
    {
        $this->userProvider = $userProvider;
    }

    public function check(string $username, string $password): bool
    {
        $user=$this->userProvider->findUser($username);
        if(!$user)
        {
            throw new RuntimeException('User not found');
        }
        return true;

    }


}
