<?php
/**
 * Tests for RoninChain
 */

use PHPUnit\Framework\TestCase;
use Roninchain\Roninchain;

class RoninchainTest extends TestCase {
    private Roninchain $instance;

    protected function setUp(): void {
        $this->instance = new Roninchain(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Roninchain::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
