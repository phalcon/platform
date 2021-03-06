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

use Acme\Repositories\UserRepository;
use Phalcon\Platform\Domain\AbstractService;

class UserService extends AbstractService
{
    public function __construct(UserRepository $repository)
    {
        parent::__construct($repository);
    }
}
```

A factory example:

```php
namespace Acme\Factories;

use Acme\Entities\UserEntity;
use Acme\Repositories\UserRepository;
use Acme\Services\UserService;
use Phalcon\Platform\Domain\AbstractFactory;

class UserFactory extends AbstractFactory
{
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
