<?php
require 'MyTest.php';


use PHPUnit\Framework\TestCase;


class MyTestTests extends TestCase
{
    private $mytest;


    protected function setUp()
    {
        $this->mytest = new MyTest();
    }


    protected function tearDown()
    {
        $this->mytest = NULL;
    }


    public function testAdd()
    {
        $result = $this->mytest->add(1, 3);
        $this->assertEquals(4, $result);
    }


}