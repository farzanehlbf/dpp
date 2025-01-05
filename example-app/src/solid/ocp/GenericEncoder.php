<?php

namespace Src\solid\ocp;
class GenericEncoder
{
    private $encoderFactory;

    /**
     * @param $EncoderFactoryInterface
     */
    public function __construct(EncoderFactoryInterface $encoderFactory)
    {
        $this->encoderFactory = $encoderFactory;
    }

    public function encoder($data,string $format): string
    {
        $encoder=$this->encoderFactory->createEncoder($format);
        return $encoder->encode($data);
    }

}
