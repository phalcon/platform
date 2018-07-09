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

use Phalcon\Mvc\ControllerInterface as BaseInterface;

/**
 * Phalcon\Platform\Mvc\ControllerInterface
 *
 * @package Phalcon\Platform\Mvc
 */
interface ControllerInterface extends BaseInterface
{
    /**
     * The on construct event.
     *
     * You'll need implement the onConstruct() method if you want to execute
     * some initialization logic just after the controller object is constructed.
     *
     * NOTE: Be aware that onConstruct() method is executed even if the action to
     * be executed doesn't exist in the controller or the user does not have access to it
     * (according to custom control access provided by the developer).
     *
     * @return void
     */
    public function onConstruct(): void;


    /**
     * This method is executed first, before any action is executed on a controller.
     *
     * NOTE: The this method is only called if the 'beforeExecuteRoute'
     * event is executed with success.
     *
     * @return void
     */
    public function initialize(): void;
}
