<?php

interface Logger
{
    public function log(string $text): void;
};

class DatabaseLogger implements Logger
{
    public function log(string $text): void
    {
        // save log in database
    }
}

class FileLogger implements Logger
{
    public function log(string $text): void
    {
        // save log in database
    }
}

class SMTPMailer
{
    public function __construct(
        private Logger $logger
    ) {
    }

    public function sendMail(): void
    {
        $this->logger->log("Some text to write in log");    
    }
}

