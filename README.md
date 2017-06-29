# Monkery test case

Composes all relevant packages for WP components unit testing ([brain/monkey](https://brain-wp.github.io/BrainMonkey/) and mockery) and provides test cases for PHPUnit that bootstrap Mockery and BrainMonkey. This package supports PHPUnit >=5.7 and as of version 4 BrainMonkey 2.0.

Installation:
```
$ composer require --dev [--prefer-dist] inpsyde/monkery-test-case 
```

## Boostraping

As of version 2.1.0, you should use the file `inc/bootstrap.php` as your testing bootstrapping file or at least require it within your testing bootstraping file.

```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit
	bootstrap="vendor/inpsyde/monkery-test-case/inc/bootstrap.php"
>
	<!-- … -->
</phpunit>

```

## Writing tests

```php
<?php

use MonkeryTestCase\BrainMonkeyWpTestCase;
	
class MyTest extends BrainMonkeyWpTestCase {

	public function test_anything() {
	
		// use \Mockery and \Brain\Monkey here
	}
}
```


## Other Notes

### Crafted by Inpsyde

The team at [Inpsyde](http://inpsyde.com/) is engineering the Web since 2006.

### Bugs, technical hints or contribute

Please give us feedback, contribute and file technical bugs on [GitHub Repo](https://github.com/inpsyde/monkery-test-case).

### License

Good news, this plugin is free for everyone! Since it's released under the [MIT](https://github.com/inpsyde/monkery-test-case/blob/master/LICENSE), you can use it free of charge on your personal or commercial blog.

### Changelog

See [CHANGELOG.md](https://github.com/inpsyde/monkery-test-case/blob/master/CHANGELOG.md)