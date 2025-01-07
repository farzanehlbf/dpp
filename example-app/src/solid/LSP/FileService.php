<?php

namespace Src\solid\LSP;

class FileService
{
    private $file;

    /**
     * @param $file
     */
    public function __construct(FileInterface $file)//آگر لوکال بهش ارسال کنیم در زمان اجرا و دانلود را صدا بزنیم چون دانلود متدش خالیه با خطا مواجه می شویم
    {
        $this->file = $file;
    }


}
