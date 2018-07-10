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

namespace Phalcon\Platform\Exceptions;

/**
 * Phalcon\Platform\Exceptions\OutOfBoundsException
 *
 * Exception thrown if a value is not a valid key.
 * This represents errors that cannot be detected at compile time.
 *
 * @package Phalcon\Platform\Exceptions
 */
class OutOfBoundsException extends RuntimeException
{
}
