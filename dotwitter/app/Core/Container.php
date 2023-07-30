<?php

namespace dotwitter\app\Core;

class Container
{
    private static $instance;
    protected $bindings = [];

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function bind($abstract, $concrete)
    {
        $this->bindings[$abstract] = $concrete;
    }

    public function make($abstract)
    {
        if (isset($this->bindings[$abstract])) {
            $concrete = $this->bindings[$abstract];
            return $this->resolve($concrete);
        }

        return null;
    }

    protected function resolve($concrete)
    {
        if (is_callable($concrete)) {
            return $concrete();
        }

        // Add additional logic for more complex dependencies here.
        // For simplicity, let's assume that the concrete is a class name for now.
        if (class_exists($concrete)) {
            return new $concrete();
        }

        return null;
    }
}