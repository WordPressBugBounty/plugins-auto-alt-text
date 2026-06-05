<?php

declare(strict_types=1);

namespace AATXT\Vendor\DI;

use AATXT\Vendor\Psr\Container\ContainerExceptionInterface;

/**
 * Exception for the Container.
 */
class DependencyException extends \Exception implements ContainerExceptionInterface
{
}
