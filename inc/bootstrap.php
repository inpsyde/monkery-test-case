<?php # -*- coding: utf-8 -*-

/**
 * Bootstraping for PHPUnit tests
 *
 * Loading antecedent/patchwork before composer autoloader.
 *
 * This file assumes a standard composer configuration (package type 'library' are installed inside vendor/)
 * and inpsyde/monkery-test-case be installed as composer package.
 */

require_once call_user_func( function() {

	$monkery_vendor = is_readable( dirname( __DIR__ ) . '/vendor/autoload.php' )
		? dirname( __DIR__ ) . '/vendor'
		: dirname( dirname( dirname( __DIR__ ) ) );

	is_readable( $monkery_vendor . '/autoload.php' ) or exit( "Composer autoload file not found\n" );

	defined( 'PHPUNIT_COMPOSER_INSTALL' ) or define( 'PHPUNIT_COMPOSER_INSTALL', $monkery_vendor . '/autoload.php' );

	error_reporting( E_ALL );

	require_once $monkery_vendor . '/antecedent/patchwork/Patchwork.php';
	if ( filter_var( getenv( 'PATCHWORK_CACHE_USE_SYSTEM_TEMP_DIR' ), FILTER_VALIDATE_BOOLEAN ) ) {
		$cache_dir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'patchwork_' . md5( __DIR__ );
		if ( ! is_dir( $cache_dir ) ) {
			mkdir( $cache_dir );
		}
		\Patchwork\enableCaching( $cache_dir, true );
	} elseif ( $cache_dir = getenv( 'PATCHWORK_CACHE_DIR' ) ) {
		$cache_dir = realpath( $cache_dir );
		\Patchwork\enableCaching( $cache_dir, true );
	}

	return $monkery_vendor . '/autoload.php';
});