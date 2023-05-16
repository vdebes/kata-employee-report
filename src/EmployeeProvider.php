<?php

namespace Vdebes\KataEmployeeReport;

class EmployeeProvider
{
    /**
     * @return array<string, int>
     */
    private static function getAllEmployees(): array
    {
        return [
            ['Max', 17],
            ['Sepp', 18],
            ['Nina', 15],
            ['Mike', 51],
        ];
    }

    public function getEmployeesOver18(): array
    {
        return self::sortByNameAscending(
            array_values(
                array_filter(
                    self::getAllEmployees(),
                    static function (array $employee): bool {
                        return $employee[1] >= 18;
                    }
                )
            )
        );
    }

    public function getAllEmployeesSorted(): array
    {
        return self::sortByNameAscending(self::getAllEmployees());
    }

    private static function sortByNameAscending(array $employees): array
    {
        usort(
            $employees,
            function (array $a, array $b): int {
                return $a[0] <=> $b[0];
            }
        );

        return $employees;
    }
}
