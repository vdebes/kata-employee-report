<?php

namespace Vdebes\KataEmployeeReport;

final class Age
{
    private int $age;

    public function __construct(int $age)
    {
        if ($age <= 0) {
            throw new \InvalidArgumentException('Age must be a positive integer');
        }
        $this->age = $age;
    }

    public function asInteger()
    {
        return $this->age;
    }
}
