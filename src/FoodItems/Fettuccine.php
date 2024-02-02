<?php

namespace FoodItems;

class Fettuccine extends FoodItem {
    const CATEGORY = "Pasta";
    public function __construct() {
        parent::__construct("フェットチーネ", "もちもち歯ごたえのフェットチーネ", 700, 10);
    }

    public static function getCategory(): string {
        return self::CATEGORY;
    }
}