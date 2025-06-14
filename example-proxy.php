<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Proxy\ProtectionProxy;

$adminViewer = new ProtectionProxy('admin');
$editorViewer = new ProtectionProxy('editor');
$guestViewer = new ProtectionProxy('guest');

echo "Admin tries to view:\n";
$adminViewer->view("design-doc.pdf");

echo "\nEditor tries to view:\n";
$editorViewer->view("editorial-plan.pdf");

echo "\nGuest tries to view:\n";
$guestViewer->view("confidential.pdf");
