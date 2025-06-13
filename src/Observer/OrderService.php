<?php

declare(strict_types=1);

namespace App\Observer;

use App\Observer\Observer;
use App\Observer\Subject;

class OrderService implements Subject {

    /**
     * @var Observer[]
     */
    private array $observers = [];

    public function attach(Observer $observer): void {
        $this->observers[] = $observer;
    }
    public function detach(Observer $observer): void {
        $this->observers = array_filter($this->observers, fn($obs) => $obs !== $observer);
    }
    public function notify(string $event): void {
        foreach ($this->observers as $observer) {
            $observer->update($event);
        }
    }
    public function placeOrder(string $orderId): void {
        // Logic to place an order
        echo "Order placed: $orderId\n";
        $this->notify("Order placed: $orderId");
    }
}