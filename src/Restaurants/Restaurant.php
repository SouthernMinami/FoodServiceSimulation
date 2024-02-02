<?php

namespace Restaurants;


use Invoices\Invoice;
use People\Employees\Cashier;

class Restaurant {
    private array $menu;
    private array $employees;
    
    public function __construct(array $menu, array $employees) {
        $this->menu = $menu;
        $this->employees = $employees;
    }

    public function getMenu(): array {
        return $this->menu;
    }

    public function getEmployees(): array {
        return $this->employees;
    }

    public function setMenu(array $menu): void {
        $this->menu = $menu;
    }

    public function setEmployees(array $employees): void {
        $this->employees = $employees;
    }

    public function handleOrderBy(Cashier $cashier): Invoice {
        $foodOrder = $cashier->generateFoodOrder($this->menu);
        $invoice = $cashier->generateInvoice($foodOrder);
        return $invoice;
    }
}