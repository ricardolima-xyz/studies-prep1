<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\AbstractFactory\DarkUIFactory;
use App\AbstractFactory\LightUIFactory;
use App\AbstractFactory\Renderer;

// Render with Light Theme
echo "Rendering with Light Theme:\n";
$lightFactory = new LightUIFactory();
$lightRenderer = new Renderer($lightFactory);
$lightRenderer->render();

echo "\n";

// Render with Dark Theme
echo "Rendering with Dark Theme:\n";
$darkFactory = new DarkUIFactory();
$darkRenderer = new Renderer($darkFactory);
$darkRenderer->render();
