<?php

namespace App\Hooks\Database\Concern;

interface DatabaseConfigurationConcern
{
    public function getDriver(): string;

    public function getHost(): string;

    public function getDatabase(): string;

    public function getUsername(): string;

    public function getPassword(): string;
}
