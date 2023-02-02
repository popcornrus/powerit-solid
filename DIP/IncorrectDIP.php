<?php

class Manager {
    public function manage(): string
    {
        return "Managing workers";
    }
}

class Worker {
    public function work(): string
    {
        return "Doing work";
    }
}

class Company {
    public function __construct(
        private Manager $manager,
        private Worker $worker,
    ) {
        $this->worker = new Worker();
    }

    public function manage(): string
    {
        return $this->manager->manage();
    }

    public function work(): string
    {
        return $this->worker->work();
    }
}
