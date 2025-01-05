<?php

namespace Src\solid\ocp;

interface EncoderInterface
{
    public function encode($data):string;
}
