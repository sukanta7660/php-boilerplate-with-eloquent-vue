<?php

namespace App\Hooks\Database;

use Illuminate\Database\Capsule\Manager as Capsule;

class Connection
{
    private $configuration;

    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function configure(): void
    {
        $capsule = new Capsule();

        $capsule->addConnection([
            'driver'    => $this->configuration->getDriver(),
            'host'      => $this->configuration->getHost(),
            'database'  => $this->configuration->getDatabase(),
            'username'  => $this->configuration->getUsername(),
            'password'  => $this->configuration->getPassword()
        ]);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}
