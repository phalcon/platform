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

namespace Phalcon\Platform\Mvc;

use Phalcon\Di\Injectable;
use Phalcon\DiInterface;
use Phalcon\Platform\Traits\InjectionAwareTrait;

/**
 * Phalcon\Platform\Mvc\Controller
 *
 * @package Phalcon\Platform\Mvc
 */
abstract class Controller extends Injectable implements ControllerInterface
{
    use InjectionAwareTrait {
        InjectionAwareTrait::__construct as protected __DiInject;
    }

    /**
     * Controller constructor.
     *
     * @param DiInterface|null $container
     */
    final public function __construct(DiInterface $container = null)
    {
        $this->__DiInject($container);

        if ($this->getDI()->has('eventsManager')) {
            $this->setEventsManager($this->getDI()->getShared('eventsManager'));
        }

        $this->onConstruct();
    }

    /**
     * {@inheritdoc}
     *
     * This method is not abstract because you can gave a concrete controller class
     * without 'onConstruct' event.
     *
     * @return void
     */
    public function onConstruct(): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * This method is not abstract because you can have a concrete controller class
     * without custom initialization logic.
     *
     * @return void
     */
    public function initialize(): void
    {
    }
}
