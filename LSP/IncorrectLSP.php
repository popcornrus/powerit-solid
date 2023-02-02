<?php

class Animal {
    public function makeSound(): string
    {
        return "Animal sound";
    }
}

class Dog extends Animal {
    public function makeSound(): string
    {
        return "Bark";
    }
}

class Cat extends Animal {
    public function makeSound(): string
    {
        return "Meow";
    }
}

class Zoo {
    private array $animals = [];

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function makeAllSounds(): string
    {
        $sounds = [];
        foreach ($this->animals as $animal) {
            if ($animal instanceof Dog) {
                $sounds[] = "Dog says: " . $animal->makeSound();
            } elseif ($animal instanceof Cat) {
                $sounds[] = "Cat says: " . $animal->makeSound();
            } else {
                $sounds[] = "Unknown animal says: " . $animal->makeSound();
            }
        }
        return implode("\n", $sounds);
    }
}
