<?php

namespace App\Services;

class Container
{
    private $bindings = [];

    public function set($abstract, callable $factory)
    {
        $this->bindings[$abstract] = $factory;
    }

    public function get($abstract)
    {
        echo $abstract;
        dd($abstract, $this->bindings, $this->bindings[$abstract], $this->bindings[$abstract]($this));
        return $this->bindings[$abstract]($this);
    }
}