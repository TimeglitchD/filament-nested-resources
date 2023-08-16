# This is my package filament-nested-resources

[![Latest Version on Packagist](https://img.shields.io/packagist/v/timeglitchd/filament-nested-resources.svg?style=flat-square)](https://packagist.org/packages/timeglitchd/filament-nested-resources)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/timeglitchd/filament-nested-resources/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/timeglitchd/filament-nested-resources/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/timeglitchd/filament-nested-resources/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/timeglitchd/filament-nested-resources/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/timeglitchd/filament-nested-resources.svg?style=flat-square)](https://packagist.org/packages/timeglitchd/filament-nested-resources)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require timeglitchd/filament-nested-resources
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-nested-resources-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-nested-resources-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-nested-resources-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentNestedResources = new TimeglitchD\FilamentNestedResources();
echo $filamentNestedResources->echoPhrase('Hello, TimeglitchD!');
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

- [Diana van der Schouw](https://github.com/TimeglitchD)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
