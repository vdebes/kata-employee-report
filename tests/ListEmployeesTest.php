<?php

namespace KataEmployeeReport\tests;

use Vdebes\KataEmployeeReport\ListEmployees;
use PHPUnit\Framework\TestCase;
use Vdebes\KataEmployeeReport\Employee;

class ListEmployeesTest extends TestCase
{
    public function testGetEmployeesOver18(): void
    {
        $employeeProvider = new ListEmployees();
        $employees = $employeeProvider->getEmployeesOver18();

        $this->assertCount(2, $employees);
        foreach ($employees as $employee) {
            $this->assertTrue($employee->hasLegalAge());
            $this->assertInstanceOf(Employee::class, $employee);
        }

        $this->assertEquals('SEPP', $employees[0]->getName()->asString());
        $this->assertEquals('MIKE', $employees[1]->getName()->asString());
    }

    public function testGetAllEmployeesSorted(): void
    {
        $employeeProvider = new ListEmployees();
        $employees = $employeeProvider->getAllEmployeesSorted();

        $this->assertCount(4, $employees);
        $this->assertEquals('SEPP', $employees[0]->getName()->asString());
        $this->assertEquals('NINA', $employees[1]->getName()->asString());
        $this->assertEquals('MIKE', $employees[2]->getName()->asString());
        $this->assertEquals('MAX', $employees[3]->getName()->asString());
    }
}
