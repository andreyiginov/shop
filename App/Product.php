<?php

namespace App;

class Product
{
    private int $id;
    private string $name;
    private int $price;

    public function __construct(int $id, string $name, int $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getPrice() {
        return $this->price;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
}