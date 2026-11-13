# Contributing

This directory contains an educational PHP reference for the 23 classic Gang of Four design patterns.

## Requirements

- PHP 8.2+
- Composer 2.x

Install dependencies from this directory:

```bash
composer install
```

## Development workflow

For changes to an implementation:

1. Describe the expected behaviour with a focused PHPUnit test.
2. Run the test and confirm that it fails for the expected reason.
3. Implement the smallest change that makes it pass.
4. Refactor without changing the observable behaviour.
5. Run the complete quality gate.

## Verification

Run:

```bash
composer check-all
```

This checks PHP formatting, PHPStan, Psalm, and PHPUnit.

## Tests

Production examples belong in `src/`; automated tests belong in `tests/Unit/`.

Keep tests deterministic and focused on externally observable behaviour. Avoid coupling tests to implementation details unless those details are part of the intended contract.

## Documentation

Keep the pattern catalogue and links in `README.md` up to date when adding or changing examples. Add patterns only when they address a meaningful learning need.

## Pull requests

Keep changes focused, include tests for behavioural changes, and run `composer check-all` before submitting.
