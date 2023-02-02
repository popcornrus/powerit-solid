<?php

class ComposeOrder {
     public function __construct(
         public string $text,
         public array $replace,
     ) {
     }

     public function applyReplaceToText(): self
     {
         // some code...

         return $this;
     }
}

class PrintOrder {
    public function __construct(
        public string $title,
        private readonly ComposeOrder $composeOrder,
    ) {
    }

    public function print(): string
    {
        // some code to print order in pdf as example
        return $this->title;
    }
}
