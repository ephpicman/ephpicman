<?php

declare(strict_types=1);

namespace Tests\Unit\ChainOfResponsibility;

use App\ChainOfResponsibility\Director;
use App\ChainOfResponsibility\Manager;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testPassesRequestsThroughTheChain(): void
    {
        $manager = new Manager();
        $director = $manager->setNext(new Director());

        self::assertInstanceOf(Director::class, $director);

        self::assertSame('manager', $manager->handle(500));
        self::assertSame('director', $manager->handle(2000));
        self::assertSame('unhandled', $manager->handle(10000));
    }
}
