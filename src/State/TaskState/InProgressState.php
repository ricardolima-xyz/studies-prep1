<?php
namespace App\State\TaskState;

use App\State\Task\Task;

class InProgressState implements TaskState
{
    public function start(Task $task): void
    {
        echo "Task is already in progress.\n";
    }

    public function complete(Task $task): void
    {
        echo "Completing the task...\n";
        $task->setState(new CompletedState());
    }

    public function getName(): string
    {
        return 'In Progress';
    }
}
