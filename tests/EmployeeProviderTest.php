<?php

namespace KataEmployeeReport\tests;

use Vdebes\KataEmployeeReport\EmployeeProvider;
use PHPUnit\Framework\TestCase;

class EmployeeProviderTest extends TestCase
{
    public function testGetEmployeesOver18()
    {
        $employeeProvider = new EmployeeProvider();
        $employees = $employeeProvider->getEmployeesOver18();

        $this->assertCount(2, $employees);
    }
}
