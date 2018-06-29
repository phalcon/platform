# Example usage

An entity example:

```php
namespace Acme\Entities;

use Phalcon\Mvc\Model;

class UserEntity extends Model
{
}
```

A repository example:

```php
namespace Acme\Repositories;

use Acme\Entities\UserEntity;
use Phalcon\Platform\Domain\AbstractRepository;

/**
 * @method \Acme\Entities\UserEntity getEntity()
 */
class UserRepository extends AbstractRepository
{
    public function __construct(UserEntity $entity)
    {
        parent::__construct($entity);
    }
}
```

A service example:

```php
namespace Acme\Services;

use Phalcon\Platform\Domain\AbstractService;

class UserService extends AbstractService
{
}
```

A factory example:

```php
namespace Acme\Factories;

use Acme\Entities\UserEntity;
use Acme\Repositories\UserRepository;
use Acme\Services\UserService;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Platform\Traits\InjectionAwareTrait;

class UserFactory implements InjectionAwareInterface
{
    use InjectionAwareTrait;

    public function createService(UserEntity $entity = null): UserService
    {
        $entity = $entity ?: $this->getDI()->get(UserEntity::class);
        $repository = $this->getDI()->get(UserRepository::class, [$entity]);

        return $this->getDI()->get(UserService::class, [$repository]);
    }
}
```
