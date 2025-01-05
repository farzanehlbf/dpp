<?php

namespace Src\solid\ocp;

interface EncoderFactoryInterface
{
    public function createEncoder( $format):EncoderInterface;
}
