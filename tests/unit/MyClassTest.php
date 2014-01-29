<?php
use Codeception\Util\Stub;

class MyClassTest extends \Codeception\TestCase\Test
{
   /**
    * @var \CodeGuy
    */
    protected $codeGuy;

    protected function _before()
    {
        require_once __DIR__ . "/../../MyClass.php";
    }

    protected function _after()
    {
    }

    public function testDoSomething()
    {
        $expected = "..........";
        $class = new MyClass();
        $actual = $class->doSomething();
        $this->assertEquals($expected, $actual);
    }

    public function testDoAnotherThing()
    {
        $expected = "**********";
        $class = new MyClass();
        $actual = $class->doAnotherThing();
        $this->assertEquals($expected, $actual);
    }

}