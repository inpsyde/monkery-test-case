<?php # -*- coding: utf-8 -*-

namespace MonkeryTestCase;

use PHPUnit\Framework\TestCase;

/**
 * Class BrainMonkeyWpTestCaseTest
 *
 * @package MonkeryTestCase
 */
class BrainMonkeyWpTestCaseTest extends TestCase  {

	/**
	 * Simply tests, if the auto loader is configured correctly
	 */
	public function test_class_exists() {

		$this->assertTrue(
			class_exists( __NAMESPACE__ . '\BrainMonkeyWpTestCase')
		);
	}
}
