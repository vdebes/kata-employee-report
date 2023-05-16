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

        array_walk(
            $employees,
            static function (array &$employee): void {
                $employee[0] = strtoupper($employee[0]);
            }
        );

        return $employees;
    }

    public function getEmployeesOver18(): array
    {
        return self::sortByNameDescending(
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
        return self::sortByNameDescending(self::getAllEmployees());
    }

    private static function sortByNameDescending(array $employees): array
    {
        usort(
            $employees,
            function (array $a, array $b): int {
                return $b[0] <=> $a[0];
            }
        );

        return $employees;
    }
}
