<?php

namespace Src\solid\ocp;

interface EncoderFactoryConfigInterface
{
    public function addEncoderFactory(string $format,callable $factory):void;

}
