<?php

declare(strict_types=1);

namespace WorldHello\Lib\Tests\Unit;

use PHPUnit\Framework\TestCase;
use WorldHello\Lib\MyClass;

/**
 * @covers \WorldHello\Lib\MyClass
 */
class MyClassTest extends TestCase
{
    public function testMethod(): void
    {
        $myClass = new MyClass();

        self::assertEquals('Hello world', $myClass->method());
    }
}
