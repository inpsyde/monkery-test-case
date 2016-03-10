<?php # -*- coding: utf-8 -*-

namespace MonkeryTestCase;

use
	Brain,
	Mockery,
	PHPUnit_Framework_TestCase;

/**
 * Class TestCase
 *
 * Sets up and closes mocking frameworks Mockery and brain/monkey
 *
 * @package MonkeryTestCase
 */
class TestCase extends PHPUnit_Framework_TestCase {

	/**
	 * Sets up the fixture, for example, open a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {

		parent::setUp();
		Brain\Monkey::setUpWP();
	}

	/**
	 * Tears down the fixture, for example, close a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown() {

		parent::tearDown();
		/**
		 * @todo figure out if this works
		 * brain/monkey also works upon mockery and therefore
		 * calls Mockery::close() but we cannot rely on that.
		 */
		Mockery::close();
		Brain\Monkey::tearDownWP();
	}

}