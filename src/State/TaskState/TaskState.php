<?php
namespace App\State\TaskState;

use App\State\Task\Task;

interface TaskState
{
    public function start(Task $task): void;
    public function complete(Task $task): void;
    public function getName(): string;
}