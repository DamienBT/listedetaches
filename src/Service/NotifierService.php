<?php

namespace App\Service;

use DateTime;

class NotifierService
{
    private $taskRepository;



    public function getTasksDay($tasks)
    {

        $dateToday = new DateTime('now');
        $taskNotifier = [];
        foreach ($tasks as $task) {
            if ($task->getBeginAt() <= $dateToday) {
                array_push($taskNotifier, $task);
            }
        }

        return $taskNotifier;
    }
}
