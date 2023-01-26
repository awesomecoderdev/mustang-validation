<?php

namespace Mustang\Core;

use Mustang\Core\ModuleInterface;
use Mustang\Container\ContainerInterface;

/**
 * Padding layer for modules.
 */
abstract class Module implements ModuleInterface
{
    public function run(ContainerInterface $c): void
    {
    }

    public function getExtensions(): array
    {
        return [];
    }

    public function getFactories(): array
    {
        return [];
    }
}
