<?php

namespace App;

class DockerDeveloper extends Developer
{
    public string $name;
    public int $age;
    public string $position;

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }
    public function estimateTask($hours): int
    {
        return rand(1,10);
    }
}