<?php

namespace Tests;

use App\Classes\TestClass;
use PHPUnit\Framework\TestCase;

class TestClassTest extends TestCase
{
    protected function setUp(): void
    {
        $this->stringToTest = 'Some Text To Display';
        $this->testObject = new TestClass($this->stringToTest);
    }

    /** @test */
    public function can_instantiate()
    {
       $this->assertInstanceOf(TestClass::class, $this->testObject);
    }

    /** @test */
    public function can_get_string()
    {
        $this->assertEquals($this->stringToTest, $this->testObject->shout());
    }
}