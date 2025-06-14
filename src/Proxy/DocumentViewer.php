<?php

declare(strict_types=1);

namespace App\Proxy;

interface DocumentViewer
{
    public function view(string $documentName): void;
}
