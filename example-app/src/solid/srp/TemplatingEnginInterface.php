<?php

namespace Src\solid\srp;

interface TemplatingEnginInterface
{
    public function render(string $template, array $params = []): string;

}
