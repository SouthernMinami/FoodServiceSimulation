<?php

namespace People\Employees;

use FoodOrders\FoodOrder;
use Invoices\Invoice;
use People\Employees\Employee;

class Cashier extends Employee{
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary){
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function generateFoodOrder(array $foodList): FoodOrder{
        // 返り値のFoodOrderはChefに渡される
        echo "レジの" . $this->getName() . " が注文を受け付けました。\n";
        return new FoodOrder($foodList);
    }

    public function generateInvoice(FoodOrder $foodOrder): Invoice{
        $invoiceStr = "領収書\n";
        $totalPrice = 0;
        $totalEstimatedTime = 0;

        foreach($foodOrder->getItems() as $foodItem){
            $invoiceStr .= $foodItem->getName() . " : " . $foodItem->getPrice() . "円\n";
            $totalPrice += $foodItem->getPrice();
        }

        echo $invoiceStr . "小計: " . $totalPrice . "円\n";

        return new Invoice($totalPrice, $foodOrder->getOrderTime(), $totalEstimatedTime);
    }
}
