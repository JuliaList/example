<?php

use App\TaskEvaluation;

require_once('../vendor/autoload.php');

function estimateTask(): int {
    return rand(1, 10);
}
    echo estimateTask() . "\n";

$arg = 5;
$result = \App\ProjectManager::getCost($arg);
echo $result ."\n";

echo TaskEvaluation::generateFinalEstimate('java');


