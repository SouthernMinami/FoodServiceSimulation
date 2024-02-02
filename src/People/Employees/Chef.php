<?php

namespace People\Employees;

use FoodItems\FoodItem;
use FoodOrders\FoodOrder;

class Chef extends Employee {
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary){
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function cookFood(FoodOrder $foodOrder): string {
        $cookingLog = "シェフの" . $this->getName() . " が注文された料理を作っています。\n";
        foreach($foodOrder->getItems() as $foodItem){
            $cookingLog .= $foodItem->getName() . "を作っています。\n";
        }
        return $cookingLog  . "料理が完成しました。\n";
    }

}