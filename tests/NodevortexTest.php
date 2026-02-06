<?php
/**
 * Tests for nodeVortex
 */

use PHPUnit\Framework\TestCase;
use Nodevortex\Nodevortex;

class NodevortexTest extends TestCase {
    private Nodevortex $instance;

    protected function setUp(): void {
        $this->instance = new Nodevortex(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodevortex::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
