<?php

class FileLogger
{
    public function log(string $text): void
    {
        // some code...
    }
}

class DatabaseLogger
{
    public function log(string $text): void
    {
        // some code...
    }
}

class SMTPMailerWithFileLog
{
    public function __construct(
        private FileLogger $fileLogger
    ) {
    }

    public function sendMail(): void
    {
        // some code...
        $this->fileLogger->log("Some text to write in log");
    }
}

class SMTPMailerWithDBLog
{
    public function __construct(
        private DatabaseLogger $dbLogger
    ) {
    }

    public function sendMail(): void
    {
        // some code...
        $this->dbLogger->log("Some text to write in log");
    }
}
