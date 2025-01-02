<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class Unit1Test extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $result = $this->add();
        $this->assertEquals($result,8);
        $this->assertTrue(true);
    }
    public function add(){
        return 3 + 5;
    }
}
