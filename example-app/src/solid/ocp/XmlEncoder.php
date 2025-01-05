<?php

namespace Src\solid\ocp;

class XmlEncoder implements EncoderInterface
{

    public function __construct()
    {
    }
    public function encode($data):string
    {
        return '<data></data>';
    }
}
