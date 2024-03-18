<?php

namespace App;

class ProjectManager implements ManagerInterface
{
    const CONST = 20;

    public function evaluateTask($hours): int
    {
        return $hours * self::CONST;
    }
}

