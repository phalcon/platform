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

namespace Phalcon\Platform\Domain;

use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Platform\Traits\InjectionAwareTrait;

/**
 * Phalcon\Platform\Domain\AbstractFactory
 *
 * @package Phosphorum\Domain\Factories
 */
abstract class AbstractFactory implements InjectionAwareInterface
{
    use InjectionAwareTrait;
}
