<?php # -*- coding: utf-8 -*-

namespace MonkeryTestCase;

use	Mockery;
use PHPUnit\Framework\TestCase;

/**
 * Class MockeryTestCase
 *
 * @package MonkeryTestCase
 */
class MockeryTestCase extends TestCase {

	/**
	 * Runs after each test and closes Mockery mocks
	 */
	public function tearDown() {

		parent::tearDown();
		Mockery::close();
	}
}