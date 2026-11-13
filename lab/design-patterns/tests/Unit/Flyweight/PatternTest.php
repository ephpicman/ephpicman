<?php

declare(strict_types=1);

namespace Tests\Unit\Flyweight;

use App\Flyweight\StyleFactory;
use App\Flyweight\TextCharacter;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testSharesIntrinsicState(): void
    {
        $factory = new StyleFactory();

        self::assertSame($factory->style('Inter', 16), $factory->style('Inter', 16));
        self::assertNotSame($factory->style('Inter', 16), $factory->style('Inter', 18));

        $character = new TextCharacter('A', $factory->style('Inter', 16));

        self::assertSame('A', $character->value);
        self::assertSame('Inter', $character->style->font);
        self::assertSame(16, $character->style->size);
    }
}
