# Laravel Commander

> This package extends Laravel 5 / 6 generating commands.

# Installation

Install by composer

```bash
    $ composer require chhw/commander
```

If you are under Laravel 5.5, please add this code in `config/app.php` below.

```php
    <?php
        'providers' => [
            CHHW\Commander\CommanderServiceProvider::class,
        ],
    ?>
```

# Usage

### Generate Service:

> Create a new service class.

```bash
    $ php artisan make:service UserService
```

### Generate Repository:

> Create a new repository class.

```bash
    $ php artisan make:repository UserRepository
```

> Or you can create a new repository class with `--model=`

```bash
    $ php artisan make:repository UserRepository --model=User
```

# Supported methods

> You can use these methods in service:

1. all($columns = ['*'])
2. find($id, $columns = ['*'])
3. firstOrFail($columns = ['*'])
4. get($columns = ['*'])
5. create(array $attributes = [])
6. with($relations)
7. destroy($ids)

### Example:

app/Services/UserService.php

```
protected $userRepository;

public function __construct(UserRepository $repository)
{
    $this->userRepository = $repository;
}

public function getAll()
{
    return $this->userRepository->all();
}
```
