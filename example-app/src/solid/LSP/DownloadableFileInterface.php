<?php

namespace Src\solid\LSP;

interface DownloadableFileInterface extends FileInterface
{
    public function download();

}
