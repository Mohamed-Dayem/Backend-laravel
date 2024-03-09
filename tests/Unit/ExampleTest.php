<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

/**
 * ExampleTest class contains unit tests for various simple functions or methods.
 */
class ExampleTest extends TestCase
{
    /**
     * test_that_true_is_true() is a basic test example that checks if the boolean value true is true.
     * This test is used to demonstrate the basic structure and usage of a unit test in PHPUnit.
     */
    public function test_that_true_is_true(): void
    {
        // The $this->assertTrue() method asserts that the evaluated condition is true.
        // In this case, we are simply checking if the boolean value true is true.
        $this->assertTrue(true);
    }
}
