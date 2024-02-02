<?php

namespace Invoices;

use FoodOrders\FoodOrder;

class Invoice {
    private float $finalPrice;
    private string $orderTime;
    private int $estimatedTimeInMinutes;

    public function __construct($finalPrice, $orderTime, $estimatedTimeInMinutes) {
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderTime;
        $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
    }

    public function getFinalPrice(): float {
        return $this->finalPrice;
    }

    public function getOrderTime(): string {
        return $this->orderTime;
    }

    public function getEstimatedTimeInMinutes(): int {
        return $this->estimatedTimeInMinutes;
    }

    public function setFinalPrice(float $finalPrice): void {
        $this->finalPrice = $finalPrice;
    }

    public function setOrderTime(string $orderTime): void {
        $this->orderTime = $orderTime;
    }

    public function setEstimatedTimeInMinutes(int $estimatedTimeInMinutes): void {
        $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
    }
}