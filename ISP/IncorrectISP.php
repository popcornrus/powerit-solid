<?php

interface Animal {
    public function fly(): string;
    public function swim(): string;
}

class Bird implements Animal {
    public function fly(): string
    {
        return "Flying";
    }

    public function swim(): string
    {
        return "Can't swim";
    }
}

class Fish implements Animal {
    public function fly(): string
    {
        return "Can't fly";
    }

    public function swim(): string
    {
        return "Swimming";
    }
}
