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
     * @param  int|string|array $conditions
     *
     * @return ResultsetInterface
     */
    public function find($conditions = null): ResultsetInterface;

    /**
     * Counts how many records match the specified conditions.
     *
     * <code>
     * // How many robots are there?
     * echo "There are ", $robotsRepository->count(), " robots\n";
     *
     * // How many mechanical robots are there?
     * $number = $robotsRepository->count("type = 'mechanical'");
     * echo "There are ", $number, " mechanical robots\n";
     *
     * // How many deleted robots are there?
     * $number = $robotsRepository->count([
     *     'deleted = :deleted:',
     *     'bind'      => ['deleted' => 1],
     *     'bindTypes' => ['user_id' => \Phalcon\Db\Column::BIND_PARAM_INT],
     * ]);
     * echo "There are ", $number, " deleted robots\n";
     * </code>
     *
     * @param  int|string|array $conditions
     *
     * @return int
     */
    public function count($conditions = null): int;
}
