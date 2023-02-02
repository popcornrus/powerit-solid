<?php

/**
*   В этом примере интерфейс Shape указывает на необходимые методы для классов, которые реализуют его.
*   Классы Circle и Square реализуют этот интерфейс, определяя метод area.
*   Класс AreaCalculator принимает массив фигур и суммирует их площади, используя метод area,
*   который определен в классах Circle и Square.
*/

interface Shape {
    public function area(): float;
}

class Circle implements Shape {
    public function __construct(
        private readonly float $radius,
    ) {
    }

    public function area(): float
    {
        return pi() * pow($this->radius, 2);
    }
}

class Square implements Shape {
    public function __construct(
        private readonly float $side,
    ) {
    }

    public function area(): float
    {
        return pow($this->side, 2);
    }
}
