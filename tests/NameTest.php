<?php

declare(strict_types=1);

namespace KataEmployeeReport\tests;

use Vdebes\KataEmployeeReport\Name;
use PHPUnit\Framework\TestCase;

final class NameTest extends TestCase
{
    public function testItIsConstructedWithAString(): void
    {
        $name = new Name('Max');
        $this->assertInstanceOf(Name::class, $name);
        $this->assertSame('MAX', (string) $name);
    }

    public function testItCannotHaveAnEmptyName(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        new Name('');
    }
}
