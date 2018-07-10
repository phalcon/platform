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
 * Phalcon\Platform\Domain\AbstractRepository
 *
 * @package Phalcon\Platform\Domain
 */
abstract class AbstractRepository implements RepositoryInterface
{
    /** @var ModelInterface */
    private $entity;

    /**
     * AbstractRepository constructor.
     *
     * @param ModelInterface $entity
     */
    public function __construct(ModelInterface $entity)
    {
        $this->entity = $entity;
    }

    /**
     * {@inheritdoc}
     *
     * @return ModelInterface
     */
    public function getEntity(): ModelInterface
    {
        return $this->entity;
    }

    /**
     * {@inheritdoc}
     *
     * @param  int|string|array $conditions
     *
     * @return ResultsetInterface
     */
    public function find($conditions = null): ResultsetInterface
    {
        return $this->getEntity()->find($conditions);
    }

    /**
     * {@inheritdoc}
     *
     * @param  int|string|array $conditions
     *
     * @return int
     */
    public function count($conditions = null): int
    {
        return $this->getEntity()->count($conditions);
    }
}
