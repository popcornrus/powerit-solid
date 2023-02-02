/**
*   Этот код нарушает принцип подстановки Барбары Лисков, потому что класс Zoo зависит от конкретных типов животных (Dog и Cat),
*   а не от их базового класса Animal. Это приводит к тому, что если бы мы добавили новый тип животного (например, Horse), 
*   то мы бы должны были изменить класс Zoo, чтобы добавить поддержку для этого нового типа.
*/

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
