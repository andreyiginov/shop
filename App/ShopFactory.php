<?php

namespace App;

class ShopFactory
{
    public function creatingAShop(): Shop {
        while (true) {
            echo "Конструктор интернет-магазина\n";
            echo "Вы хотите создать новый магазин? (Д/Н)\n";
            $answer = mb_strtolower(trim(fgets(STDIN)));

            if ($answer === 'д') {
                echo "Создание магазина\n";
                echo "Введите название магазина\n";
                $name = trim(fgets(STDIN));
                echo "Введите адрес магазина\n";
                $address = trim(fgets(STDIN));
                return new Shop($name, $address);
            } else if ($answer === 'н') {
                echo "Выход из программы\n";
                die();
            } else {
                echo "Некорректный ввод. Пожалуйста, введите 'Д' или 'Н'.\n";
                $this->creatingAShop();
            }
        }
    }
}