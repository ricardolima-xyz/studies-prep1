<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Memento\TextEditor;
use App\Memento\History;

$editor = new TextEditor();
$history = new History();

$editor->write("First version.\n");
$history->push($editor->save());

$editor->write("Second version.\n");
$history->push($editor->save());

$editor->write("Third version.\n");

echo "Current content:\n";
echo $editor->getContent();

echo "\nUndoing...\n";
$editor->restore($history->pop());

echo "After one undo:\n";
echo $editor->getContent();

echo "\nUndoing again...\n";
$editor->restore($history->pop());

echo "After second undo:\n";
echo $editor->getContent();
