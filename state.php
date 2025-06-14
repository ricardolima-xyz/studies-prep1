<?php

declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';

use App\State\Task\Task;
use App\State\TaskState\InProgressState;
use App\State\TaskState\CompletedState;

// Create a new Task
$task = new Task("Write documentation");

// Initial state
echo "Initial state: " . $task->getStateName() . PHP_EOL;

// Move to In Progress
$task->setState(new InProgressState());
echo "After starting: " . $task->getStateName() . PHP_EOL;

// Move to Done
$task->setState(new CompletedState());
echo "After completing: " . $task->getStateName() . PHP_EOL;

// Optionally move back to In Progress (e.g., revision needed)
$task->setState(new InProgressState());
echo "After revision: " . $task->getStateName() . PHP_EOL;
