<?php
namespace App\TaskState;

use App\Task\Task;

class ToDoState implements TaskState
{
    public function start(Task $task): void
    {
        echo "Starting the task...\n";
        $task->setState(new InProgressState());
    }

    public function complete(Task $task): void
    {
        echo "Cannot complete a task that hasn't been started yet.\n";
    }

    public function getName(): string
    {
        return 'To Do';
    }
}
