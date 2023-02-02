<?php

interface Flyable {
    public function fly(): string;
}

interface Walkable {
    public function walk(): string;
}

class Bird implements Flyable, Walkable {
    public function fly(): string
    {
        return "Flying";
    }

    public function walk(): string
    {
        return "Walking";
    }
}

class Plane implements Flyable {
    public function fly(): string
    {
        return "Flying in the sky";
    }
}

class Human implements Walkable {
    public function walk(): string
    {
        return "Walking on two feet";
    }
}
