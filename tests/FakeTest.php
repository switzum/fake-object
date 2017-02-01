<?php
namespace Switzum\FakeObject;

use PHPUnit\Framework\TestCase;

class FakeTest extends TestCase
{
    /**
     * @test
     */
    public function this_Success()
    {
        $this->assertTrue(Fake::this(true));
    }
}