<?php

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
