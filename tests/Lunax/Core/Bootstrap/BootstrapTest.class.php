<?php

namespace Lunax\Bootstrap\Test;

use \PHPUnit\Framework\TestCase;
use Lunax\Bootstrap\Bootstrap;

class BootstrapTest extends TestCase
{
    public function testRun()
    {
        $bootstrap = new Bootstrap();
        $this->assertEquals($bootstrap->run(), true);
    }
}
