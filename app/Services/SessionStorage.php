<?php

namespace App\Services;

class SessionStorage
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        session_start();
        $this->logger = $logger;
    }

    public function set($key, $value)
    {
        $this->logger->log("Setting $key to the $value");
        $_SESSION[$key] = $value;
    }

    public function get($key)
    {
        return $_SESSION[$key];
    }
}