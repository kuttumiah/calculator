# Calculator

This is a package created by following tutorial on w3resource.com and
bagisto to learn building packages for Laravel.

## Setup

1. In `/config/app.php`, add the following to `providers`:
```php
    Kuttumiah\Calculator\Providers\CalculatorServiceProvider::class,
```

## Usage

The package ships with 2 routes. One is to add and another is to subtract
2 integer values.

To access those routes use
```http request
http://yourwebsite.test/kuttumiah/calculator/add/7/6
```

or
```http request
http://yourwebsite.test/kuttumiah/calculator/subtract/7/6
```

## License

MIT License

## Author Information

This package was created in 2019 by [Md Robaiatul Islam](mailto:robaiat.shaon@gmail.com).
