<?php

declare(strict_types=1);

namespace App\Interpreter;

interface Expression
{
    /** @param array<string, bool> $context */
    public function interpret(array $context): bool;
}

final class Variable implements Expression
{
    public function __construct(private readonly string $name)
    {
    }

    /** @param array<string, bool> $context */
    public function interpret(array $context): bool
    {
        return $context[$this->name] ?? false;
    }
}

final class AndExpression implements Expression
{
    public function __construct(
        private readonly Expression $left,
        private readonly Expression $right,
    ) {
    }

    /** @param array<string, bool> $context */
    public function interpret(array $context): bool
    {
        return $this->left->interpret($context) && $this->right->interpret($context);
    }
}
