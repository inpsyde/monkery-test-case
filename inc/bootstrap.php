<?php # -*- coding: utf-8 -*-

/**
 * Bootstraping for PHPUnit tests
 *
 * Loading antecedent/patchwork before composer autoloader.
 *
 * This file assumes a standard composer configuration (package type 'library' are installed inside vendor/)
 * and inpsyde/monkery-test-case be installed as composer package.
 */

$vendor = is_readable( dirname( __DIR__ ) . '/vendor/autoload.php' )
	? dirname( __DIR__ ) . '/vendor'
	: dirname( dirname( dirname( __DIR__ ) ) );

is_readable( $vendor . '/autoload.php' ) or exit( "Composer autoload file not found\n" );

if ( ! defined( 'PHPUNIT_COMPOSER_INSTALL' ) ) {
	define( 'PHPUNIT_COMPOSER_INSTALL', $vendor . '/autoload.php' );
}

require_once $vendor . '/antecedent/patchwork/Patchwork.php';
require_once $vendor . '/autoload.php';

unset( $vendor );

