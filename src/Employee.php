<?php

declare(strict_types=1);

namespace Vdebes\KataEmployeeReport;

final class Employee
{
    private Name $name;
    private Age $age;

    public function __construct(Name $name, Age $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): Name
    {
        return $this->name;
    }

    public function getAge(): Age
    {
        return $this->age;
    }
}
