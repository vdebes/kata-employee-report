<?php

declare(strict_types=1);

namespace Vdebes\KataEmployeeReport;

final class Employee
{
    private Name $name;
    private int $age;

    public function __construct(Name $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): Name
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}
