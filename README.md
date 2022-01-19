#  Importmap Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tonysm/importmap-laravel.svg?style=flat-square)](https://packagist.org/packages/tonysm/importmap-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/tonysm/importmap-laravel/run-tests?label=tests)](https://github.com/tonysm/importmap-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/tonysm/importmap-laravel/Check%20&%20fix%20styling?label=code%20style)](https://github.com/tonysm/importmap-laravel/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/tonysm/importmap-laravel.svg?style=flat-square)](https://packagist.org/packages/tonysm/importmap-laravel)

## Introduction

Use ESM with importmap to manage modern JavaScript in Laravel without transpiling or bundling.

### Inspiration

This package was inspired by the [Importmap Rails](https://github.com/rails/importmap-rails) gem.

## Installation

You can install the package via composer:

```bash
composer require tonysm/importmap-laravel
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="importmap-laravel-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="importmap-laravel-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="importmap-laravel-views"
```

## Usage

```php
$importmapLaravel = new Tonysm\ImportmapLaravel();
echo $importmapLaravel->echoPhrase('Hello, Tonysm!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Tony Messias](https://github.com/tonysm)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
