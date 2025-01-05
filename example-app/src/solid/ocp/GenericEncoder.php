<?php

namespace Src\solid\ocp;

use http\Exception\InvalidArgumentException;

class GenericEncoder
{
    public function encoder($data,string $format): string
    {
        if ($format == 'json') {
             $encoder= new JsonEncoder();

        }elseif ($format == 'xml') {
             $encoder= new XmlEncoder();
        }else{
            throw new InvalidArgumentException('format not supported');
        }
        return $encoder->encode($data);
    }

}
