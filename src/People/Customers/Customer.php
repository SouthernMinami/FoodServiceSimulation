<?php

namespace People\Customers;

use Restaurants\Restaurant;
use People\Person;

class Customer extends Person {
    private array $foodList;
    public function __construct(string $name, int $age, string $address){
        parent::__construct($name, $age, $address);
        $this->foodList = [];
    }

    public function interestedCategories(Restaurant $restaurant): array{
        $foodCategories = [];
        foreach($restaurant->getMenu() as $foodItem){
            if(!in_array($foodItem->getCategory(), $foodCategories)){
                $foodCategory = $foodItem->getCategory();
                $foodCategories.array_push($foodCategory);
            }
        }
        return $foodCategories;
    }
    
    public function passOrderFoodList(Restaurant $restaurant, array $categories): array {
        foreach($restaurant->getMenu() as $foodItem){
            if(in_array($foodItem->getCategory(), $categories)){
                $this->foodList.array_push($foodItem);
            }
        }
        return $this->foodList;
    }
}