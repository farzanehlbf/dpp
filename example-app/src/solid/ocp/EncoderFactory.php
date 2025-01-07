<?php

namespace Src\solid\ocp;
use InvalidArgumentException;

class EncoderFactory implements EncoderFactoryInterface,EncoderFactoryConfigInterface
{
    private $factorories=[];

    public function addEncoderFactory(string $format,callable $factory):void
    {
        $this->factorories[$format] = $factory;
    }

    public function createEncoder($format):EncoderInterface
    {
        if (!isset($this->factorories[$format])) {
           throw new InvalidArgumentException("Format $format is not supported");

        }
       $factory= $this->factorories[$format];
       return new $factory();

    }
    /* public function createEncoder(string $format):EncoderInterface
    {
        if ($format == 'json') {
            $encoder= new JsonEncoder();

        }elseif ($format == 'xml') {
            $encoder= new XmlEncoder();
        }else{
            throw new InvalidArgumentException('format not supported');
        }
        return $encoder;
    }*/



//$encoderFactory = new EncoderFactory();

//// ثبت فرمت‌ها
//$encoderFactory->addEncoderFactory('json', JsonEncoder::class);
//$encoderFactory->addEncoderFactory('xml', XmlEncoder::class);

//// استفاده از فرمت‌ها
//$jsonEncoder = $encoderFactory->createEncoder('json'); // خروجی: JsonEncoder
//$xmlEncoder = $encoderFactory->createEncoder('xml');   // خروجی: XmlEncoder


}
