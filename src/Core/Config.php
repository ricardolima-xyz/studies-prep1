<?php

declare(strict_types=1);

namespace App\Core;

final class Config
{
    private static ?self $instance = null;

    private readonly array $settings;

    private function __construct(array $settings)
    {
        $this->settings = $settings;
    }

    public static function getInstance(array $settings = []): self
    {
        if (self::$instance === null) {
            self::$instance = new self($settings);
        }

        return self::$instance;
    }

    public function get(string $key): mixed
    {
        return $this->settings[$key] ?? null;
    }
}
