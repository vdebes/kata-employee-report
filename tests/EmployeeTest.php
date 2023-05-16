<?php

declare(strict_types=1);

namespace KataEmployeeReport\tests;

use Vdebes\KataEmployeeReport\Employee;
use PHPUnit\Framework\TestCase;
use Vdebes\KataEmployeeReport\Name;
use Vdebes\KataEmployeeReport\Age;

final class EmployeeTest extends TestCase
{
    public function testItIsConstructedWithAName(): void
    {
        $employee = new Employee(new Name('Max'), new Age(18));
        $this->assertInstanceOf(Employee::class, $employee);
        $this->assertSame('MAX', (string) $employee->getName());
    }

    public function testItHasLegalAge(): void
    {
        $employee = new Employee(new Name('Max'), new Age(18));
        $this->assertTrue($employee->hasLegalAge());
    }

    public function testItHasNotLegalAge(): void
    {
        $employee = new Employee(new Name('Max'), new Age(17));
        $this->assertFalse($employee->hasLegalAge());
    }
}
