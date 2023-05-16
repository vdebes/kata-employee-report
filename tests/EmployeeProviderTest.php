<?php

namespace KataEmployeeReport\tests;

use Vdebes\KataEmployeeReport\EmployeeProvider;
use PHPUnit\Framework\TestCase;

class EmployeeProviderTest extends TestCase
{
    public function testGetEmployeesOver18(): void
    {
        $employeeProvider = new EmployeeProvider();
        $employees = $employeeProvider->getEmployeesOver18();

        $this->assertCount(2, $employees);
        $this->assertEquals('SEPP', $employees[0][0]);
        $this->assertEquals('MIKE', $employees[1][0]);
    }

    public function testGetAllEmployeesSorted(): void
    {
        $employeeProvider = new EmployeeProvider();
        $employees = $employeeProvider->getAllEmployeesSorted();

        $this->assertCount(4, $employees);
        $this->assertEquals('SEPP', $employees[0][0]);
        $this->assertEquals('NINA', $employees[1][0]);
        $this->assertEquals('MIKE', $employees[2][0]);
        $this->assertEquals('MAX', $employees[3][0]);
    }
}
