<?php

declare(strict_types=1);

namespace App\AbstractFactory;

class Renderer
{
    private UIFactory $factory;

    public function __construct(UIFactory $factory)
    {
        $this->factory = $factory;
    }

    public function render(): void
    {
        $button = $this->factory->createButton();
        $checkbox = $this->factory->createCheckbox();

        $button->render();
        $checkbox->render();
    }
}
