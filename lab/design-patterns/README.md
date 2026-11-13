# Design Patterns Lab

A practical, test-driven reference for the 23 classic Gang of Four (GoF) design patterns, implemented in PHP 8.2+.

This is an isolated learning project within the [EphpicMan engineering workspace](https://github.com/ephpicman/ephpicman). Each pattern has a small implementation and a focused PHPUnit unit test. The examples are intended for study and experimentation, not as a framework or production package.

## Pattern catalogue

### Creational

- [Abstract Factory](src/AbstractFactory/Pattern.php) · [Unit test](tests/Unit/AbstractFactory/PatternTest.php)
- [Builder](src/Builder/Pattern.php) · [Unit test](tests/Unit/Builder/PatternTest.php)
- [Factory Method](src/FactoryMethod/Pattern.php) · [Unit test](tests/Unit/FactoryMethod/PatternTest.php)
- [Prototype](src/Prototype/Pattern.php) · [Unit test](tests/Unit/Prototype/PatternTest.php)
- [Singleton](src/Singleton/Pattern.php) · [Unit test](tests/Unit/Singleton/PatternTest.php)

### Structural

- [Adapter](src/Adapter/Pattern.php) · [Unit test](tests/Unit/Adapter/PatternTest.php)
- [Bridge](src/Bridge/Pattern.php) · [Unit test](tests/Unit/Bridge/PatternTest.php)
- [Composite](src/Composite/Pattern.php) · [Unit test](tests/Unit/Composite/PatternTest.php)
- [Decorator](src/Decorator/Pattern.php) · [Unit test](tests/Unit/Decorator/PatternTest.php)
- [Facade](src/Facade/Pattern.php) · [Unit test](tests/Unit/Facade/PatternTest.php)
- [Flyweight](src/Flyweight/Pattern.php) · [Unit test](tests/Unit/Flyweight/PatternTest.php)
- [Proxy](src/Proxy/Pattern.php) · [Unit test](tests/Unit/Proxy/PatternTest.php)

### Behavioural

- [Chain of Responsibility](src/ChainOfResponsibility/Pattern.php) · [Unit test](tests/Unit/ChainOfResponsibility/PatternTest.php)
- [Command](src/Command/Pattern.php) · [Unit test](tests/Unit/Command/PatternTest.php)
- [Interpreter](src/Interpreter/Pattern.php) · [Unit test](tests/Unit/Interpreter/PatternTest.php)
- [Iterator](src/Iterator/Pattern.php) · [Unit test](tests/Unit/Iterator/PatternTest.php)
- [Mediator](src/Mediator/Pattern.php) · [Unit test](tests/Unit/Mediator/PatternTest.php)
- [Memento](src/Memento/Pattern.php) · [Unit test](tests/Unit/Memento/PatternTest.php)
- [Observer](src/Observer/Pattern.php) · [Unit test](tests/Unit/Observer/PatternTest.php)
- [State](src/State/Pattern.php) · [Unit test](tests/Unit/State/PatternTest.php)
- [Strategy](src/Strategy/Pattern.php) · [Unit test](tests/Unit/Strategy/PatternTest.php)
- [Template Method](src/TemplateMethod/Pattern.php) · [Unit test](tests/Unit/TemplateMethod/PatternTest.php)
- [Visitor](src/Visitor/Pattern.php) · [Unit test](tests/Unit/Visitor/PatternTest.php)

## Structure

```text
lab/design-patterns/
├── src/                 # Pattern implementations
├── tests/Unit/          # PHPUnit tests
├── composer.json
├── phpunit.xml
└── README.md
```

## Requirements

- PHP 8.2 or later
- Composer 2.x

## Setup

Run these commands from this directory:

```bash
composer install
```

## Verification

Run the complete local quality gate:

```bash
composer check-all
```

Or run individual checks:

```bash
composer test
composer analyze:phpstan
composer analyze:psalm
composer format:check
```

GitHub Actions runs PHPUnit on PHP 8.2–8.5 and checks formatting, PHPStan, and Psalm.

## How to study a pattern

1. Identify the problem the pattern addresses.
2. Read the implementation in `src/`.
3. Read the corresponding unit test and identify the behaviour it protects.
4. Consider the trade-offs and whether a simpler design would solve the same problem.
5. Experiment with an alternative implementation and add tests for it.

The goal is not to use more patterns. It is to recognise recurring design problems and choose the simplest appropriate solution.

## Scope

This project covers the 23 classic GoF patterns. It does not claim to catalogue every useful software pattern. Application architecture, enterprise integration, concurrency, domain-driven design, and language-specific idioms are separate topics.

## License

MIT. See [LICENSE](LICENSE).
