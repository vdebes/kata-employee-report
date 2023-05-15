<?php

namespace KataEmployeeReport\tests;

use PHPUnit\Framework\TestCase;
use Vdebes\KataEmployeeReport\Foo;

class FooTest extends TestCase
{
    public function testBar(): void
    {
        $foo = new Foo();
        $this->assertTrue($foo->bar());
    }
}
