# This is an example package for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/idfx/laravel-example-package.svg?style=flat-square)](https://packagist.org/packages/idfx/laravel-example-package)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/dj-idfx/laravel-example-package/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/dj-idfx/laravel-example-package/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/dj-idfx/laravel-example-package/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/dj-idfx/laravel-example-package/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/idfx/laravel-example-package.svg?style=flat-square)](https://packagist.org/packages/idfx/laravel-example-package)

This is an example package for Laravel - Spatie package training.

## Installation

You can install the package via composer:

```bash
composer require idfx/laravel-example-package
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-example-package-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-example-package-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-example-package-views"
```

## Usage

```php
$example = new Idfx\Example();
echo $example->echoPhrase('Hello, Idfx!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## Credits

- [David Carton](https://github.com/dj-idfx)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
