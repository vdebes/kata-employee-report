<?php

declare(strict_types=1);

namespace Vdebes\KataEmployeeReport;

final class LegalAgeFilter
{
    public function __invoke(): \Closure
    {
        return static function (Employee $employee): bool {
            return $employee->hasLegalAge();
        };
    }
}
