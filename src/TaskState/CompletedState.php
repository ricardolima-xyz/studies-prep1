<?php
namespace App\TaskState;

use App\Task\Task;

class CompletedState implements TaskState
{
    public function start(Task $task): void
    {
        echo "Cannot start a completed task.\n";
    }

    public function complete(Task $task): void
    {
        echo "Task is already completed.\n";
    }

    public function getName(): string
    {
        return 'Completed';
    }
}
