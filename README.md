# Playground: Matrix

[![Playground CI Workflow](https://github.com/gammamatrix/playground-matrix/actions/workflows/ci.yml/badge.svg?branch=develop)](https://raw.githubusercontent.com/gammamatrix/playground-matrix/testing/develop/testdox.txt)
[![Test Coverage](https://raw.githubusercontent.com/gammamatrix/playground-matrix/testing/develop/coverage.svg)](tests)
<!-- [![PHPStan Level 9](https://img.shields.io/badge/PHPStan-level%209-brightgreen)](.github/workflows/ci.yml#L120) -->

The Playground Matrix is a package for [Laravel](https://laravel.com/docs/11.x) applications.

This package provides the models to use Playground Matrix, a project management tool.

Read more on using [Playground Matrix at Read the Docs: Playground Documentation.](https://gammamatrix-playground.readthedocs.io/en/develop/components/matrix.html)

## Installation

This package is required with [playground-matrix-api (API without UI)](https://github.com/gammamatrix/playground-matrix-api) or [playground-matrix-resource (API with UI)](https://github.com/gammamatrix/playground-matrix-resource)

If you do not need an API and just want the models, then the package may be installed with:

You can install the package via composer:

```bash
composer require gammamatrix/playground-matrix
```

## `artisan:about`

Playground Matrix provides information in the `artisan about` command.

<img src="resources/docs/artisan-about-playground-matrix.png" alt="screenshot of artisan about command with Playground Matrix.">

## Configuration

Migrations are disabled by default. This package may sometimes be installed where another system handles the migrations.

See the contents of the published config file: [config/playground-matrix.php](config/playground-matrix.php)

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Playground\Matrix\ServiceProvider" --tag="playground-config"
```

### Environment Variables

|  env()                              | config()                            |
|-------------------------------------|-------------------------------------|
| `PLAYGROUND_MATRIX_LOAD_MIGRATIONS` | `playground-matrix.load.migrations` |
- The loading option for migrations does not take effect if the migrations have been exported to your app. The control for loading is handled in the package [ServiceProvider.](src/ServiceProvider.php)

## Models

This package includes [factories](database/factories), models and [migrations](database/migrations) for:
- [Backlogs](src/Models/Backlog.php)
- [Boards](src/Models/Board.php)
- [Epics](src/Models/Epic.php)
- [Flows](src/Models/Flow.php)
- [Matrices](src/Models/Matrix.php)
- [Milestones](src/Models/Milestone.php)
- [Notes](src/Models/Note.php)
- [Projects](src/Models/Project.php)
- [Releases](src/Models/Release.php)
- [Roadmaps](src/Models/Roadmap.php)
- [Sources](src/Models/Source.php)
- [Sprints](src/Models/Sprint.php)
- [Tags](src/Models/Tag.php)
- [Teams](src/Models/Team.php)
- [Tickets](src/Models/Ticket.php)
- [Versions](src/Models/Version.php)

## Migrations

All [database/migrations](database/migrations) are disabled by default.
- NOTE: There are 16 tables that will be created, they do have indexes and unique constraints defined; however, this release does not have the foreign key constraint migrations included at this time.

You can publish the migrations file with:
```bash
php artisan vendor:publish --provider="Playground\Matrix\ServiceProvider" --tag="playground-migrations"
```

## Cloc

```sh
composer cloc
```

```
➜  playground-matrix git:(feature/GH-25) ✗ composer cloc
> cloc --exclude-dir=node_modules,output,vendor .
     148 text files.
     118 unique files.
      32 files ignored.

github.com/AlDanial/cloc v 1.98  T=0.29 s (405.5 files/s, 234827.7 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
JSON                            18              0              0          49172
PHP                             92           1285           4715          12506
YAML                             1              5              0            275
XML                              3              0              7            215
Markdown                         3             44              0            102
INI                              1              3              0             12
-------------------------------------------------------------------------------
SUM:                           118           1337           4722          62282
-------------------------------------------------------------------------------
```

## PHPStan

Tests at level 9 on:
- `config/`
- `database/`
- `src/`
- `tests/Feature/`
- `tests/Unit/`

```sh
composer analyse
```

## Coding Standards

```sh
composer format
```

## Testing

```sh
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Jeremy Postlethwaite](https://github.com/gammamatrix)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
