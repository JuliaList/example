<?php

namespace App;

interface ManagerInterface {
    const TIME_OVERHEAD = 1.5;

    public function estimateTask($hours): int;
}