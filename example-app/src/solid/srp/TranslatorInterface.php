<?php

namespace Src\solid\srp;

interface TranslatorInterface
{
    public function translate(string $text): string;
}
