<?php # -*- coding: utf-8 -*-

namespace MonkeryTestCase;

use \Mockery\Adapter\Phpunit\MockeryTestCase;
use function Brain\Monkey\setUp;
use function Brain\Monkey\tearDown;

/**
 * Class BrainMonkeyWpTestCase
 *
 * Sets up and closes mocking frameworks Mockery and brain/monkey
 *
 * @package MonkeryTestCase
 */
class BrainMonkeyWpTestCase extends MockeryTestCase  {

	/**
	 * Sets up the fixture, for example, open a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp(): void {

		parent::setUp();
		setUp();
	}

	/**
	 * Tears down the fixture, for example, close a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown(): void {

		parent::tearDown();
		tearDown();
	}

}
