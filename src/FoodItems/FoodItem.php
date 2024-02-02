<?php

namespace FoodItems;

abstract class FoodItem{
    private string $name;
    private string $description;
    private float $price;

    private int $estimatedTimeInMinutes;

    public function __construct(string $name, string $description, float $price, int $estimatedTimeInMinutes) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getEstimatedTimeInMinutes(): int {
        return $this->estimatedTimeInMinutes;
    }

    public abstract static function getCategory(): string;
}