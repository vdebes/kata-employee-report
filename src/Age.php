<?php

declare(strict_types=1);

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

    public function isLegal(): bool
    {
        return $this->age >= 18;
    }
}
