<?php

use App\Product;
use App\Shop;

require_once "App/Shop.php";
require_once "App/Product.php";
require_once "App/ShopFactory.php";
require_once "App/ProductFactory.php";

$ShopFactory = new \App\ShopFactory();

$shop = $ShopFactory->creatingAShop();

$productFactory = new \App\ProductFactory();

$product = $productFactory->createAProduct();

$shop->addProducts($product);

var_dump($shop);
var_dump($product);
