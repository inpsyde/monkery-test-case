<?php # -*- coding: utf-8 -*-

/**
 * Bootstraping for PHPUnit tests
 *
 * Loading antecedent/patchwork before composer autoloader.
 *
 * This file assumes a standard composer configuration (package type 'library' are installed inside vendor/)
 * and inpsyde/monkery-test-case be installed as composer package.
 */
call_user_func( function() {

	$monkery_vendor = is_readable( dirname( __DIR__ ) . '/vendor/autoload.php' )
		? dirname( __DIR__ ) . '/vendor'
		: dirname( dirname( dirname( __DIR__ ) ) );

	is_readable( $monkery_vendor . '/autoload.php' ) or exit( "Composer autoload file not found\n" );

	error_reporting( E_ALL );

	require_once $monkery_vendor . '/autoload.php';
});
