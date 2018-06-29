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

use Phalcon\Mvc\ModelInterface;

/**
 * Phalcon\Platform\Domain\FactoryInterface
 *
 * @package Phalcon\Platform\Domain
 */
interface FactoryInterface
{
    /**
     * Creates an entity instance.
     *
     * @return ModelInterface
     */
    public function createEntity();

    /**
     * Creates a repository instance.
     *
     * @param  ModelInterface $entity
     *
     * @return RepositoryInterface
     */
    public function createRepository($entity);

    /**
     * Creates a service instance.
     *
     * @return ServiceInterface
     */
    public function createService();
}
