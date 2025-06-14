<?php

declare(strict_types=1);

namespace App\Proxy;

class RealDocumentViewer implements DocumentViewer
{
    public function view(string $documentName): void
    {
        echo "Displaying contents of document: {$documentName}\n";
    }
}
