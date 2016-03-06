# Sked-Laravel
Laravel 5 Service Provider for [Sked](https://github.com/CampusUnion/Sked).

## Installation & Setup

Install the Sked Service Provider via [Composer](http://getcomposer.org)
by adding the `camusunion/sked-laravel` package to the `require` object in
your project's `composer.json`.

```json
{
    ...
    "require": {
        "camusunion/sked-laravel": "dev-master"
    },
    ...
}
```

*NOTE:* This package automatically requires `camusunion/sked`, so you do NOT
have to add it separately to your `composer.json`.

Then run `composer update`.

Next, add the Sked Service Provider to the `providers` array in `config/app.php`.

```php
    'providers' => [
        ...
        CampusUnion\SkedServiceProvider::class,
    ],
```

Add the Sked facade to the `aliases` array in `config/app.php`.

```php
    'aliases' => [
        ...
        'Sked' => CampusUnion\SkedFacade::class,
    ],
```

## Configuration

The following environment variables are used to configure Sked:
```
SKED_DC_NAME
SKED_DC_TYPE
SKED_DC_HOST
SKED_DC_DBNAME
SKED_DC_USER
SKED_DC_PASS
```

### Optional

To customize the configuration options, publish the configuration file using Artisan:

```sh
php artisan vendor:publish
```

Update your settings in the generated `app/config/sked.php` configuration file.

## Usage

```php
foreach (Sked::skeDates() as $skeDate) {
    // do something
}
```
