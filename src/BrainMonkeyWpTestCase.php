<?php # -*- coding: utf-8 -*-

namespace MonkeryTestCase;

use PHPUnit\Framework\TestCase;
use function Brain\Monkey\setUp;
use function Brain\Monkey\tearDown;

/**
 * Class BrainMonkeyWpTestCase
 *
 * Sets up and closes mocking frameworks Mockery and brain/monkey
 *
 * @package MonkeryTestCase
 */
class BrainMonkeyWpTestCase extends TestCase  {

	/**
	 * Sets up the fixture, for example, open a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {

		parent::setUp();
		setUp();
	}

	/**
	 * Tears down the fixture, for example, close a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown() {

		parent::tearDown();
		tearDown();
	}

}