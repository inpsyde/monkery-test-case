# Monkery test case

Composes all relevant packages for WP components unit testing ([brain/monkey](https://brain-wp.github.io/BrainMonkey/) and mockery) and provides test cases for PHPUnit that bootstrap Mockery and BrainMonkey. _Monkery_ is a portmanteau of Mockery and Monkey.

Installation:
```
composer require --dev inpsyde/monkery-test-case
```

## Writing tests

```php
<?php

use MonkeryTestCase\BrainMonkeyWpTestCase;

class MyTest extends BrainMonkeyWpTestCase {

    public function testAnything() {

        // use \Mockery and \Brain\Monkey here
    }
}
```

## But why?

Working on large projects with several packages that all declare a `...\Tests\MockeryTestCase` class which does exactly
the same will result in a confusing list of autocomplete suggestions in your IDE. Also, with one central FQCN for the
test case class you can use an IDE file template across packages.

## Other Notes

### Crafted by Inpsyde

The team at [Inpsyde](http://inpsyde.com/) is engineering the Web since 2006.

### Bugs, technical hints or contribute

Please give us feedback, contribute and file technical bugs on [GitHub Repo](https://github.com/inpsyde/monkery-test-case).

### License

Good news, this plugin is free for everyone! Since it's released under the [GPL](https://github.com/inpsyde/monkery-test-case/blob/main/LICENSE), you can use it free of charge on your personal or commercial blog.

