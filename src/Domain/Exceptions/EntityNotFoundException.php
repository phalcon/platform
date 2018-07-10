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

use Throwable;

/**
 * Phalcon\Platform\Domain\Exceptions\EntityNotFoundException
 *
 * Thrown by the persistence provider when entity does not exist.
 *
 * @package Phalcon\Platform\Domain\Exceptions
 */
class EntityNotFoundException extends PersistenceException
{
    /**
     * Name of the affected entity.
     *
     * @var string
     */
    protected $entity;

    /**
     * EntityNotFoundException constructor.
     *
     * @param string         $entity
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct(string $entity, int $code = 0, Throwable $previous = null)
    {
        $this->entity = $entity;

        parent::__construct(
            "No query results for entity [{$entity}]",
            $code,
            $previous
        );
    }

    /**
     * Get the affected affected entity.
     *
     * @return string
     */
    public function getEntity(): string
    {
        return $this->entity;
    }
}
