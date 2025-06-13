<?php
namespace App\TaskState;

use App\Task\Task;

interface TaskState
{
    public function start(Task $task): void;
    public function complete(Task $task): void;
    public function getName(): string;
}