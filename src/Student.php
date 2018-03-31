<?php

namespace Metaprogramming;

class Student {
    private $methods = [];

    public function addMethod($methodName, $closuse)
    {
        $this->methods[$methodName] = $closuse;
    }

    public function __call($method, $args)
    {
        if(isset($this->methods[$method]) && is_callable($this->methods[$method]))
        {
            return call_user_func_array($this->methods[$method], $args);
        }

        throw new Error();
    }
}