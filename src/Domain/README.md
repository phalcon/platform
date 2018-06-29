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

use Phalcon\Platform\Domain\AbstractRepository;

class UserRepository extends AbstractRepository
{
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
use Phalcon\Platform\Domain\FactoryInterface;

class UserFactory implements FactoryInterface, InjectionAwareInterface
{
    use InjectionAwareTrait;

    public function createEntity(): UserEntity
    {
        return $this->getDI()->get(UserEntity::class);
    }

    public function createRepository(UserEntity $entity): UserRepository
    {
        return $this->getDI()->get(UserRepository::class, [$entity]);
    }

    public function createService(): UserService
    {
        return $this->getDI()->get(UserService::class, [
            $this->createRepository(
                $this->createEntity()
            )
        ]);
    }
}
```
