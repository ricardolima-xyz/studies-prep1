#!/usr/bin/env php
<?php

declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';

use App\Facade\VideoConversionFacade;

$converter = new VideoConversionFacade();
$result = $converter->convertVideo("awesome-video.avi", "mp4");

echo "Result: {$result}\n";