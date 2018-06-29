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

use Phalcon\Mvc\Model\ResultsetInterface;
use Phalcon\Mvc\ModelInterface;

/**
 * Phalcon\Platform\Domain\RepositoryInterface
 *
 * @package Phalcon\Platform\Domain
 */
interface RepositoryInterface
{
    /**
     * Get related entity.
     *
     * @return ModelInterface
     */
    public function getEntity(): ModelInterface;

    /**
     * Find a specific record.
     *
     * @param int|string|array $parameters
     *
     * @return ResultsetInterface
     */
    public function find($parameters = null): ResultsetInterface;
}
