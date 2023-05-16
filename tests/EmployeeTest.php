<?php

namespace KataEmployeeReport\tests;

use Vdebes\KataEmployeeReport\Employee;
use PHPUnit\Framework\TestCase;
use Vdebes\KataEmployeeReport\Name;
use Vdebes\KataEmployeeReport\Age;

class EmployeeTest extends TestCase
{
    public function testItIsConstructedWithAName(): void
    {
        $employee = new Employee(new Name('Max'), new Age(18));
        $this->assertInstanceOf(Employee::class, $employee);
        $this->assertSame('MAX', $employee->getName()->asString());
    }
}
