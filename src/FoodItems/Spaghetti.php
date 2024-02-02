<?php

namespace FoodItems;

class Spaghetti extends FoodItem {
    const CATEGORY = "Pasta";
    public function __construct() {
        parent::__construct("スパゲッティ", "アルデンテのスパゲッティ", 800, 10);
    }

    public static function getCategory(): string {
        return "Pasta";
    }
}