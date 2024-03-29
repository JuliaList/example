<?php

namespace App;

class TaskEvaluation
{
    public static function getDeveloperEstimate($language)
    {
        switch ($language) {
            case 'java':
                $Javadeveloper = new JavaDeveloper('John', 30, 'Senior');
                return $Javadeveloper->estimateTask();
            case 'php':
                $phpdeveloper = new PhpDeveloper();
                $phpdeveloper->setName('Alice');
                $phpdeveloper->setAge(25);
                $phpdeveloper->setPosition('Junior');
                return $phpdeveloper->estimateTask();
            // add cases for other languages if needed
        }
    }
    public static function getManagerEstimate($language) {
        $projectManager = new ProjectManager();
        return $projectManager->estimateTask(self::getDeveloperEstimate($language));
    }

    public static function generateFinalEstimate($language) {
        return self::getManagerEstimate($language);
    }
}

