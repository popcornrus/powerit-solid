<?php

class PrintOrder {
    public function __construct(
        public string $text,
        public array $replace,
        public string $fileName,
    ) {
    }

    public function applyReplaceToText(): self
    {
        // some code...

        return $this;
    }

    public function print(): string
    {
        // some code...
        return $this->title;
    }
}
