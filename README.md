# Want to measure QR code statistic? Create the proper URL, and measure with the help of this package!
## Installation

You can install the package via composer:

```bash
composer require zoparga/laravel-qr-code-statistic
```

You can publish and run the migrations with:

```bash
php artisan vendor:publishe
# select this package
php artisan migrate
```

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-qr-code-statistic-views"
```

## Usage

open your app url with `qr_code_source` and or `qr_code_description` parameters

`APPURL?qr_code_source=test&qr_code_description=test_description`

Values will be stored in the database, so you can measure which of your QR code were used.
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

- [zoparga](https://github.com/zoparga)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
