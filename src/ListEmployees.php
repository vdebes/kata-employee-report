<?php

declare(strict_types=1);

namespace Vdebes\KataEmployeeReport;

final class ListEmployees
{
    /**
     * @var Employee[]
     */
    private array $employees;

    public function __construct()
    {
        $employees = [
            ['Max', 17],
            ['Sepp', 18],
            ['Nina', 15],
            ['Mike', 51],
        ];

        $this->employees = array_map(
            static fn (array $employee): Employee => new Employee(new Name($employee[0]), new Age($employee[1])),
            $employees
        );
    }

    public function __invoke(?LegalAgeFilter $filter = null): array
    {
        if ($filter === null) {
            return $this->getAllEmployeesSorted();
        }

        return self::sortByNameDescending(
            array_values(
                array_filter(
                    $this->employees,
                    $filter()
                )
            )
        );
    }

    private function getAllEmployeesSorted(): array
    {
        return self::sortByNameDescending($this->employees);
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
