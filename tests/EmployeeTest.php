<?php

namespace KataEmployeeReport\tests;

use Vdebes\KataEmployeeReport\Employee;
use PHPUnit\Framework\TestCase;
use Vdebes\KataEmployeeReport\Name;

class EmployeeTest extends TestCase
{
    public function testItIsConstructedWithAName(): void
    {
        $employee = new Employee(new Name('Max'), 18);
        $this->assertInstanceOf(Employee::class, $employee);
        $this->assertSame('Max', $employee->getName()->asString());
    }
}
