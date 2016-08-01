# Monkery test case

Composes all relevant packages for WP components unit testing ([brain/monkey](https://brain-wp.github.io/BrainMonkey/) and mockery) and provides test cases for PHPUnit that bootstrap Mockery and BrainMonkey.

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


## Other Notes

### Crafted by Inpsyde

The team at [Inpsyde](http://inpsyde.com/) is engineering the Web since 2006.

### Bugs, technical hints or contribute

Please give us feedback, contribute and file technical bugs on [GitHub Repo](https://github.com/inpsyde/monkery-test-case).

### License

Good news, this plugin is free for everyone! Since it's released under the [MIT](https://github.com/inpsyde/monkery-test-case/blob/master/LICENSE), you can use it free of charge on your personal or commercial blog.

### Changelog

See [commits](https://github.com/inpsyde/monkery-test-case/commits/master).