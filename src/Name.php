<?php

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

    public function asString(): string
    {
        return $this->name;
    }
}
