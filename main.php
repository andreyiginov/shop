<?php

use App\Product;
use App\Shop;

require_once "App/Shop.php";
require_once "App/Product.php";
require_once "App/StoreFactory.php";
require_once "App/ProductFactory.php";

$storeFactory = new \App\StoreFactory();

$shop = $storeFactory->creatingAShop();

$productFactory = new \App\ProductFactory();

$product = $productFactory->createAProduct();

$shop->addProducts($product);

var_dump($shop);
var_dump($product);
