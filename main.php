<?php

spl_autoload_extensions(".php");
spl_autoload_register(function ($class) {
    $base_dir = __DIR__ . '/src';
    $file = $base_dir . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        // ファイルが存在する場合は読み込み、なかったら処理を中断
        require $file;
    }
});

/* Foods */
$cheeseBurger = new FoodItems\CheeseBurger();
$fettuccine = new FoodItems\Fettuccine();
$margaritaPizza = new FoodItems\MargaritaPizza();
$spaghetti = new FoodItems\Spaghetti();

/* People */
// Customer
$Kano = new People\Customers\Customer("Kano", 25, "TOKYO");
// Cashier
$Sato = new People\Employees\Cashier("Sato", 30, "TOKYO", 13, 2000);
// Chef
$Yamada = new People\Employees\Chef("Yamada", 35, "TOKYO", 14, 3000);

/* Restaurant */
$restaurant = new Restaurants\Restaurant([$cheeseBurger, $fettuccine, $margaritaPizza, $spaghetti], [$Sato, $Yamada]);


$invoice = $restaurant->handleOrderBy($Sato);

