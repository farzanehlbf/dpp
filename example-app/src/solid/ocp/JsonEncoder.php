<?php

namespace Src\solid\ocp;

class JsonEncoder implements EncoderInterface
{

    public function __construct()
    {
    }
    public function encode($data):string
    {
        return '{data:""}';
    }
}
