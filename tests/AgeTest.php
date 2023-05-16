<?php

declare(strict_types=1);

namespace KataEmployeeReport\tests;

use PHPUnit\Framework\TestCase;
use Vdebes\KataEmployeeReport\Age;

final class AgeTest extends TestCase
{
    public function testItIsConstructedWithANotNullInteger(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        new Age(0);
    }

    public function testItIsConstructedWithAPositiveInteger(): void
    {
        $age = new Age(1);
        $this->assertInstanceOf(Age::class, $age);
        $this->assertSame(1, $age->asInteger());
    }

    public function testItIsLegalIfOverOrEqualTo18(): void
    {
        $age = new Age(18);
        $this->assertTrue($age->isLegal());
    }

    public function testItIsNotLegalIfBelow18(): void
    {
        $age = new Age(17);
        $this->assertFalse($age->isLegal());
    }
}
