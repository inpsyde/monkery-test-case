# Monkery test case

Composes all relevant packages for WP components unit testing (brain/monkey and mockery) and provides a simple 
test case for PHPUnit that sets up everything.

Usage:
```
$ composer require --dev [--prefer-dist] inpsyde/monkery-test-case 
```

```php
<?php

use 
	MonkeryTestCase\TestCase;
	
class MyTest extends TestCase {

	public function test_anything() {
	
		// you can use \Mockery and \Brain\Monkey here
	}
}
```