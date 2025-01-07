<?php

namespace Src\solid\LSP;

interface FileInterface
{
    public function rename();
    public function move();
    public function copy();
    public function download();
}
