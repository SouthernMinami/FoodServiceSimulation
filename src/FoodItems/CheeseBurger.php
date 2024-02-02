<?php

namespace FoodItems;

class CheeseBurger extends FoodItem {
    const CATEGORY = "Burgers";
    public function __construct() {
        parent::__construct("チーズバーガー", "とろけるチェダーチーズのチーズバーガー", 500, 5);
    }

    public static function getCategory(): string {
        return self::CATEGORY;
    }

}