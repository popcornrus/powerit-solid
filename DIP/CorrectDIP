<?php

interface IWorker
{
    public function work(): string;
}

class Manager implements IWorker
{
    public function work(): string
    {
        return "Managing workers";
    }
}

class Worker implements IWorker
{
    public function work(): string
    {
        return "Doing work";
    }
}

class Company
{
    public function __construct(
        private readonly IWorker $worker
    ) {
    }

    public function manage(): string
    {
        return $this->worker->work();
    }
}
