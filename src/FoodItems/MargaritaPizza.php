<?php

namespace FoodItems;

class MargaritaPizza extends FoodItem {
    const CATEGORY = "Pizza";
    public function __construct() {
        parent::__construct("マルガリータピザ", "トマトソースとモッツァレラチーズのマルガリータピザ", 1000, 15);
    }

    public static function getCategory(): string {
        return "Pizza";
    }
}