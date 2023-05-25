<?php

namespace Umg\Bundle\SymfonyBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class UmgSymfonyBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
