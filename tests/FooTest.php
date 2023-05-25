<?php

namespace Alfredbez\PhpunitCodeceptionDependencyIssueTest;

use PHPUnit\Framework\TestCase;
use Alfredbez\PhpunitCodeceptionDependencyIssue\Foo;

class FooTest extends TestCase
{
    public function testSomething(): void
    {
        self::assertTrue(Foo::something());
    }
}
