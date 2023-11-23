# playground-matrix

The playground-matrix package.

## Installation

You can install the package via composer:

```bash
composer require gammamatrix/playground-matrix
```

## Configuration

All options are disabled by default.

See the contents of the published config file: [config/playground-matrix.php](config/playground-matrix.php)

You can publish the config file with:
```bash
php artisan vendor:publish --provider="GammaMatrix\Playground\Matrix\ServiceProvider" --tag="playground-config"
```

### Environment Variables

playground-matrix.load.migrations
PLAYGROUND_MATRIX_LOAD_MIGRATIONS


|  env()                              | config()                            |
|-------------------------------------|-------------------------------------|
| `PLAYGROUND_MATRIX_LOAD_MIGRATIONS` | `playground-matrix.load.migrations` |


## Migrations

All migrations are disabled by default.

See the contents of the published config file: [database/migrations](database/migrations)
- NOTE: There are 15 tables that will be created, they do have indexes and unique constraints defined; however, this release does not have the foreign key constraint migrations included at this time.

You can publish the migrations file with:
```bash
php artisan vendor:publish --provider="GammaMatrix\Playground\Matrix\ServiceProvider" --tag="playground-migrations"
```

## Tests

```sh
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.
