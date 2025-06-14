<?php

declare(strict_types=1);

namespace App\Proxy;

class ProtectionProxy implements DocumentViewer
{
    private RealDocumentViewer $realViewer;
    private string $userRole;

    public function __construct(string $userRole)
    {
        $this->userRole = $userRole;
        $this->realViewer = new RealDocumentViewer();
    }

    public function view(string $documentName): void
    {
        if ($this->userRole === 'admin' || $this->userRole === 'editor') {
            $this->realViewer->view($documentName);
        } else {
            echo "Access denied. User role '{$this->userRole}' does not have permission to view this document.\n";
        }
    }
}
