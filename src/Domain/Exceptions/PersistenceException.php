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

namespace Phalcon\Platform\Domain\Exceptions;

use Phalcon\Platform\Exceptions\RuntimeException;

/**
 * Phalcon\Platform\Domain\Exceptions\PersistenceException
 *
 * Thrown by the persistence provider when a problem occurs.
 *
 * @package Phalcon\Platform\Domain\Exceptions
 */
class PersistenceException extends RuntimeException
{
}
