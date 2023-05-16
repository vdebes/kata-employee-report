<?php

namespace KataEmployeeReport\tests;

use Vdebes\KataEmployeeReport\ListEmployees;
use PHPUnit\Framework\TestCase;
use Vdebes\KataEmployeeReport\Employee;
use Vdebes\KataEmployeeReport\LegalAgeFilter;

class ListEmployeesTest extends TestCase
{
    public function testGetEmployeesOver18(): void
    {
        $employeeProvider = new ListEmployees();
        $employees = $employeeProvider(new LegalAgeFilter());

        $this->assertCount(2, $employees);
        foreach ($employees as $employee) {
            $this->assertTrue($employee->hasLegalAge());
            $this->assertInstanceOf(Employee::class, $employee);
        }

        $this->assertSame('SEPP', (string) $employees[0]->getName());
        $this->assertSame('MIKE', (string) $employees[1]->getName());
    }

    public function testItListsAllEmployeesIfNoLegalAgeFilterIsUsed(): void
    {
        $employeeProvider = new ListEmployees();
        $employees = $employeeProvider();

        $this->assertCount(4, $employees);
        foreach ($employees as $employee) {
            $this->assertInstanceOf(Employee::class, $employee);
        }
    }

    public function testGetAllEmployeesSorted(): void
    {
        $employeeProvider = new ListEmployees();
        $employees = $employeeProvider();

        $this->assertCount(4, $employees);
        $this->assertEquals('SEPP', (string) $employees[0]->getName());
        $this->assertEquals('NINA', (string) $employees[1]->getName());
        $this->assertEquals('MIKE', (string) $employees[2]->getName());
        $this->assertEquals('MAX', (string) $employees[3]->getName());
    }
}
