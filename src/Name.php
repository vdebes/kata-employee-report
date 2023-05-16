<?php

declare(strict_types=1);

namespace Vdebes\KataEmployeeReport;

final class Name
{
    private string $name;

    public function __construct(string $name)
    {
        if ($name === '') {
            throw new \InvalidArgumentException('Name cannot be empty');
        }

        $this->name = $name;
    }

    public function __toString(): string
    {
        return strtoupper($this->name);
    }
}
