<?php

namespace App\Classes;

class TestClass
{
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function shout()
    {
        return $this->string;
    }
}