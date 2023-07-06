<?php

namespace App\Hooks\Database;

class Configuration
{
    private string $driver = 'mysql';
    private string $host = '127.0.0.1';
    private string $database = 'database';
    private string $username = 'root';
    private string $password = 'password';

    public function __construct(string $driver, string $host, string $database, string $username, string $password)
    {
        $this->driver = $driver;
        $this->host = $host;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
    }

    public function getDriver(): string
    {
        return $this->driver;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getDatabase(): string
    {
        return $this->database;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
