<?php

use App\Product;
use App\Shop;

require_once "App/Shop.php";
require_once "App/Product.php";
require_once "App/StoreConstructor.php";

// Магазин
$nameShop = null;
$address = null;

// Продукт
$id = null;
$nameProduct = null;
$price = null;

$storeConstructor = new \App\StoreConstructor();

$storeConstructor->creatingAStore();

/*
echo "Вы хотите создать новый товар? (Д/Н)";
$answer = trim(fgetc(STDIN));
if ($answer == 'Д') {
    echo "Конструктор товара";
    echo "Введите id продукта: ";
    $id = (int)trim(fgets(STDIN));
    echo "Введите название продукта: ";
    $nameProduct = trim(fgets(STDIN));
    echo "Введите цену продукта: ";
    $price = (int)trim(fgets(STDIN));
    echo "Товар" . $nameProduct . "успешно создан";
} else if ($answer == 'Н') {
    echo "Выход из программы";
    exit();
}

*/
$shop = new Shop();
$product = new Product();
$shop->addProducts($product);
