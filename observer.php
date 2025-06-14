#!/usr/bin/env php
<?php

declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';

use App\Observer\OrderService;
use App\Observer\EmailNotifier;
use App\Observer\Logger;

// Create the subject
$orderService = new OrderService();

// Attach observers
$emailNotifier = new EmailNotifier();
$logger = new Logger();
$orderService->attach($emailNotifier);
$orderService->attach($logger);

// Trigger the event
$orderService->placeOrder("Order #1234");

// Detach an observer and place another order
$orderService->detach($logger);

echo "\nPlacing another order...\n";
$orderService->placeOrder("Order #5678");
