# Design Patterns in PHP

A practical, test-driven reference for the **23 classic Gang of Four (GoF) design patterns**, implemented in PHP 8.2+.

This collection preserves the original implementations and their PHPUnit tests. Each pattern is isolated in its own directory so it can be studied independently.

## Pattern catalogue

### Creational
- [Abstract Factory](src/AbstractFactory/Pattern.php)
- [Builder](src/Builder/Pattern.php)
- [Factory Method](src/FactoryMethod/Pattern.php)
- [Prototype](src/Prototype/Pattern.php)
- [Singleton](src/Singleton/Pattern.php)

### Structural
- [Adapter](src/Adapter/Pattern.php)
- [Bridge](src/Bridge/Pattern.php)
- [Composite](src/Composite/Pattern.php)
- [Decorator](src/Decorator/Pattern.php)
- [Facade](src/Facade/Pattern.php)
- [Flyweight](src/Flyweight/Pattern.php)
- [Proxy](src/Proxy/Pattern.php)

### Behavioural
- [Chain of Responsibility](src/ChainOfResponsibility/Pattern.php)
- [Command](src/Command/Pattern.php)
- [Interpreter](src/Interpreter/Pattern.php)
- [Iterator](src/Iterator/Pattern.php)
- [Mediator](src/Mediator/Pattern.php)
- [Memento](src/Memento/Pattern.php)
- [Observer](src/Observer/Pattern.php)
- [State](src/State/Pattern.php)
- [Strategy](src/Strategy/Pattern.php)
- [Template Method](src/TemplateMethod/Pattern.php)
- [Visitor](src/Visitor/Pattern.php)

## Structure
- `src/` — PHP implementations.
- `tests/Unit/` — Focused PHPUnit tests.
- Composer, PHPUnit, PHPStan, Psalm and PHP CS Fixer configuration — isolated development toolchain.

## Requirements
- PHP 8.2+
- Composer

## Setup and verification

Run these commands from this directory:

```bash
composer install
composer check-all
```

Individual checks are also available: `composer test`, `composer analyze:phpstan`, `composer analyze:psalm`, and `composer format:check`.

## How to study a pattern
1. Identify the problem the pattern addresses.
2. Read the implementation in `src/`.
3. Read its test in `tests/Unit/` and identify the observable behaviour.
4. Consider the trade-offs and whether a simpler design would solve the same problem.
5. Adapt the example to a realistic use case rather than applying the pattern mechanically.

The goal is not to use more patterns. It is to recognise recurring design problems and choose the simplest appropriate solution.

## Scope
This collection covers the 23 classic GoF patterns. It is an educational reference, not a general-purpose framework or an exhaustive catalogue of software design patterns.

## Licence
MIT. See [LICENSE](LICENSE).
