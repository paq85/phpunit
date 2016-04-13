<?php

class WasAutoloaded extends PHPUnit_Framework_TestCase
{
    const FOO = 'foo';
    
    public function testInWasAutoloaded()
    {
        $this->assertTrue(true);
    }
}