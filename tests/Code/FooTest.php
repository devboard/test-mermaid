<?php
namespace tests\Code;

class FooTest  extends \PHPUnit_Framework_TestCase
{
    public function testBar()
    {
        $target = new \Code\Foo();

        $this->assertSame('bar', $target->getBar());
    }
}
