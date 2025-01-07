<?php

namespace Src\solid\DIP;

class Connection
{
    public function query(string $query, array $params = []):bool
    {
        return true;
    }

}
