# Laravel Commander

> This package extends Laravel 5 generating commands.

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
    $ php artisan make:service TestService
```

### Generate Repository:

> Create a new repository class.

```bash
    $ php artisan make:repository TestRepository
```
