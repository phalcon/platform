<?php
declare(strict_types=1);

/*
 +------------------------------------------------------------------------+
 | Phalcon Platform                                                       |
 +------------------------------------------------------------------------+
 | Copyright (c) 2018 Phalcon Team                                        |
 +------------------------------------------------------------------------+
 | This source file is subject to the New BSD License that is bundled     |
 | with this package in the file LICENSE.txt.                             |
 |                                                                        |
 | If you did not receive a copy of the license and are unable to         |
 | obtain it through the world-wide-web, please send an email             |
 | to license@phalconphp.com so we can send you a copy immediately.       |
 +------------------------------------------------------------------------+
*/

namespace Phalcon\Platform\Traits;

use Phalcon\Di;
use Phalcon\DiInterface;

/**
 * Phalcon\Platform\Traits\InjectionAwareTrait
 *
 * @package Phalcon\Platform\Traits
 */
trait InjectionAwareTrait
{
    /**
     * Dependency Injection container.
     *
     * @var DiInterface
     */
    private $container;

    /**
     * Dependency Injection constructor.
     *
     * @param DiInterface|null $container
     */
    public function __construct(DiInterface $container = null)
    {
        if ($container == null) {
            $container = Di::getDefault() ?? new Di();
        }

        Di::setDefault($container);

        $this->setDI($container);
    }

    /**
     * Sets Dependency Injection container.
     *
     * @param  DiInterface $container
     *
     * @return void
     */
    public function setDI(DiInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Gets Dependency Injection container.
     *
     * @return DiInterface
     */
    public function getDI()
    {
        return $this->container;
    }
}
