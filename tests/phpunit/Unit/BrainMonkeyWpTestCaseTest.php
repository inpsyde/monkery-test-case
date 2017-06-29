<?php # -*- coding: utf-8 -*-

namespace MonkeryTestCase;

use function Brain\Monkey\Actions\expectAdded;
use function Brain\Monkey\Actions\expectDone;

/**
 * Class BrainMonkeyWpTestCaseTest
 *
 * @package MonkeryTestCase
 */
class BrainMonkeyWpTestCaseTest extends BrainMonkeyWpTestCase {

	/**
	 * Simply tests, if the auto loader is configured correctly
	 */
	public function test_class_exists() {

		$this->assertTrue(
			class_exists( __NAMESPACE__ . '\BrainMonkeyWpTestCase' )
		);
	}

	public function test_action_added() {

		expectAdded( 'action' )
			->with( \Mockery::on( function( $callable ) {
				self::assertInternalType( 'callable', $callable );
				return true;
			} ) );

		add_action( 'action', function() {} );
	}

	public function test_action_done() {

		expectDone( 'action' )
			->with( \Mockery::on( function( $value ) {
				self::assertSame( 'parameter', $value );
				return true;
			} ) );

		do_action( 'action', 'parameter' );
	}
}
