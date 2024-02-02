<?php

namespace FoodOrders;

class FoodOrder {
    private array $items;
    private string $orderTime;

    public function __construct(array $items) {
        $this->items = $items;
        $this->orderTime = date("D M d, Y G:i");
    }

    public function getItems(): array {
        return $this->items;
    }

    public function getOrderTime(): string {
        return $this->orderTime;
    }

    public function setItems(array $items): void {
        $this->items = $items;
    }

    public function setOrderTime(string $orderTime): void {
        $this->orderTime = $orderTime;
    }
}