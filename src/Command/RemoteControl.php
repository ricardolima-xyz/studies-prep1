<?php

declare(strict_types=1);

namespace App\Command;

class RemoteControl
{
    /** @var Command[] */
    private array $commands = [];

    public function setCommand(int $buttonNumber, Command $command): void
    {
        $this->commands[$buttonNumber] = $command;
    }

    public function pressButton(int $buttonNumber): void
    {
        if (!isset($this->commands[$buttonNumber])) {
            echo "No command assigned to button {$buttonNumber}\n";
            return;
        }

        $this->commands[$buttonNumber]->execute();
    }
}