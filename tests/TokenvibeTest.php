<?php
/**
 * Tests for TokenVibe
 */

use PHPUnit\Framework\TestCase;
use Tokenvibe\Tokenvibe;

class TokenvibeTest extends TestCase {
    private Tokenvibe $instance;

    protected function setUp(): void {
        $this->instance = new Tokenvibe(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokenvibe::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
