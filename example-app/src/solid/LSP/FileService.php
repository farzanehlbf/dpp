<?php

namespace Src\solid\LSP;

use http\Exception\InvalidArgumentException;

class FileService implements FileServiceInterface
{


    public function encode(EncodeableFileInterface $file)
    {
//        if (!($file instanceof LocalFile)) {
//            throw new InvalidArgumentException('File must be an instance of LocalFile');
//        }
    }
}
