<?php

namespace Vdebes\KataEmployeeReport;

class ListEmployees
{
    /**
     * @return array<string, int>
     */
    private static function getAllEmployees(): array
    {
        $employees = [
            ['Max', 17],
            ['Sepp', 18],
            ['Nina', 15],
            ['Mike', 51],
        ];

        return array_map(
            static fn (array $employee): Employee => new Employee(new Name($employee[0]), new Age($employee[1])),
            $employees
        );
    }

    public function getEmployeesOver18(): array
    {
        $isLegalFilter = static function (Employee $employee): bool {
            return $employee->hasLegalAge();
        };

        return self::sortByNameDescending(
            array_values(
                array_filter(
                    self::getAllEmployees(),
                    $isLegalFilter
                )
            )
        );
    }

    public function getAllEmployeesSorted(): array
    {
        return self::sortByNameDescending(self::getAllEmployees());
    }

    private static function sortByNameDescending(array $employees): array
    {
        usort(
            $employees,
            function (Employee $a, Employee $b): int {
                return $b->getName() <=> $a->getName();
            }
        );

        return $employees;
    }
}
