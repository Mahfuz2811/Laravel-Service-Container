<?php

namespace App\Services;

class Logger
{
    public function log($message)
    {
        echo "Logging $message to the database";
    }
}