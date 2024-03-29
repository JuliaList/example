<?php

namespace App;

class JavaDeveloper extends Developer
{

    public string $name;
    public int $hours;
    public string $position;

    public function __construct(string $name, int $hours, string $position)
    {
        $this->name = $name;
        $this->hours = $hours;
        $this->position = $position;
    }
    public function estimateTask($hours): int
    {
        return rand(1,10);
    }

    public static function getRatingFromDeveloper()
    {
        return 8;
    }


}