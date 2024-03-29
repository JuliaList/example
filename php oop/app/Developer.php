<?php

namespace App;

abstract class Developer implements ManagerInterface
{
    public function evaluateTask($rating): int
    {
        // оценка задачи
        return "Task evaluated by Developer with rating: $rating";
    }
}


