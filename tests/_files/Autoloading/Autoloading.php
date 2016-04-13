<?php

class Autoloading extends PHPUnit_Framework_TestCase
{
    public function someProviderTriggeringAutoloading()
    {
        require_once(__DIR__ . '/WasAutoloaded.php'); // fake class autoloading triggered by WasAutoloaded::FOO used below
        
        return [
            [WasAutoloaded::FOO] // this line would trigger class autoloading
        ];
    }

    /**
     * @param $value
     * 
     * @dataProvider someProviderTriggeringAutoloading
     */
    public function testInAutoloading($value)
    {
        $this->assertEquals('foo', $value);
    }
}