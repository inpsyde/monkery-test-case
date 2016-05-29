<?php # -*- coding: utf-8 -*-

namespace MonkeryTestCase;

use
	Mockery,
	PHPUnit_Framework_TestCase;

/**
 * Class MockeryTestCase
 *
 * @package MonkeryTestCase
 */
class MockeryTestCase extends PHPUnit_Framework_TestCase {

	/**
	 * Runs after each test and closes Mockery mocks
	 */
	public function tearDown() {

		parent::tearDown();
		Mockery::close();
	}
}