# Contributing

This directory is an educational reference for the 23 classic Gang of Four design patterns in PHP.

## Development environment

Requirements:

- PHP 8.2+
- Composer 2.x

Install dependencies from this directory:

```bash
composer install
```

## Making changes

Keep each pattern isolated in its own directory under `src/`. Its corresponding PHPUnit test belongs under `tests/Unit/`.

When changing an example:

1. Keep the implementation focused on demonstrating the pattern.
2. Test observable behaviour rather than internal implementation details.
3. Avoid framework dependencies and unrelated abstractions.
4. Update the pattern catalogue in `README.md` if a pattern is added or renamed.

## Verification

Run the complete quality gate:

```bash
composer check-all
```

Individual checks:

```bash
composer test
composer analyze:phpstan
composer analyze:psalm
composer format:check
```

Run `composer format` to apply PHP CS Fixer formatting.

## Scope

The collection covers the canonical 23 GoF patterns. New material outside that catalogue should be considered separately rather than silently expanding the scope of this reference.
