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
        $this->assertEquals('MIKE', $employees[0][0]);
        $this->assertEquals('SEPP', $employees[1][0]);
    }

    public function testGetAllEmployeesSorted(): void
    {
        $employeeProvider = new EmployeeProvider();
        $employees = $employeeProvider->getAllEmployeesSorted();

        $this->assertCount(4, $employees);
        $this->assertEquals('MAX', $employees[0][0]);
        $this->assertEquals('MIKE', $employees[1][0]);
        $this->assertEquals('NINA', $employees[2][0]);
        $this->assertEquals('SEPP', $employees[3][0]);
    }
}
