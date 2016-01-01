<?php

use Mrk\ComposerPlayground\Playground;

class PlaygroundTest extends PHPUnit_Framework_TestCase
{
    public function testPlayground()
    {
        $p = new Playground();
        $this->assertEquals(true, $p->method());
    }
}
