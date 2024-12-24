<?php

namespace App;

class Shop
{
    private string $name;
    private string $address;

    private array $products;

    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function addProducts(Product $product): void
    {
        $this->products[] = $product;
    }

    public function get() {}

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getAddress() {
        return $this->address;
    }
    public function setAddress($address) {
        $this->address = $address;
    }
}