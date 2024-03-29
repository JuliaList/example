<?php

namespace App;

class ProjectManager implements ManagerInterface
{
   const TIME_COST = 2; //константа "издержки времени"




    #[\Override] public function estimateTask($hours): int {
        // TODO: Implement estimateTask() method.
        return $hours * self::TIME_COST;
    }
}
