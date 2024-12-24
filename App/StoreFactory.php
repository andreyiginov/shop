<?php

namespace App;

class StoreFactory
{
    public function creatingAShop(): Shop {
        while (true) {
            echo "Конструктор интернет-магазина\n";
            echo "Вы хотите создать новый магазин? (Д/Н)\n";
            $answer = mb_strtolower(trim(fgets(STDIN)));

            if ($answer === 'д') {
                echo "Создание магазина\n";

                return new Shop('Страпонята', 'Гаврилово 21' );
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