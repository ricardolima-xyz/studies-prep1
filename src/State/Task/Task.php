<?php
namespace App\State\Task;

use App\State\TaskState\TaskState;
use App\State\TaskState\ToDoState;

class Task
{
    private TaskState $state;
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->state = new ToDoState(); // Default state
    }

    public function setState(TaskState $state): void
    {
        $this->state = $state;
    }

    public function start(): void
    {
        $this->state->start($this);
    }

    public function complete(): void
    {
        $this->state->complete($this);
    }

    public function getStateName(): string
    {
        return $this->state->getName();
    }

    public function getName(): string
    {
        return $this->name;
    }
}
