<?php # -*- coding: utf-8 -*-

namespace MonkeryTestCase;

use
	PHPUnit_Framework_TestCase;

/**
 * Class TestCaseTest
 *
 * @package MonkeryTestCase
 */
class TestCaseTest extends PHPUnit_Framework_TestCase {

	/**
	 * Simply tests, if the auto loader is configured correctly
	 */
	public function test_class_exists() {

		$this->assertTrue(
			class_exists( __NAMESPACE__ . '\TestCase')
		);
	}
}
