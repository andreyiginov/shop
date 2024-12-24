<?php

namespace App;

class ProductFactory
{
    public function createAProduct (): Product
    {
        while (true) {
            echo "Вы хотите создать новый товар? (Д/Н)\n";
            $answer = mb_strtolower(trim(fgets(STDIN)));
            if ($answer === 'д') {
                echo "Конструктор товара\n";
                echo "Введите id продукта: \n";
                $id = (int)trim(fgets(STDIN));
                echo "Введите название продукта: \n";
                $nameProduct = trim(fgets(STDIN));
                echo "Введите цену продукта: \n";
                $price = (int)trim(fgets(STDIN));
                echo "Товар" . $nameProduct . "успешно создан\n";
                return new Product($id, $nameProduct, $price);
            } else if ($answer === 'н') {
                echo "Выход из программы\n";
                exit();
            } else {
                echo "Некорректный ввод. Пожалуйста, введите 'Д' или 'Н'.\n";
                $this->createAProduct();
            }
        }
    }
}