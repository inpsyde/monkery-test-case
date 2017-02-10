# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]

## [2.1.0]

* Add `inc/bootstrap.php` to load `antecedent/patchwork` before the composer autoloader. Set `error_reporting( E_ALL )`.
* Removed `composer.lock` from version control
* Update `brain/monkey` from `~1.3` to `^1.4`

## [2.0.0]
* Add CHANGELOG.md
* **Breaking change**: Rename `MonkeryTestCase\TestCase` to `MonkeryTestCase\BrainMonkeyWpTestCase`

## [1.1.0]
* Add `MonkeryTestCase\MockeryTestCase` for configuring Mockery separately

## [1.0.0]
* Initial release: provide a PHP unit test case that sets up [BrainMonkey](https://brain-wp.github.io/BrainMonkey/) for you.

[Unreleased]:https://github.com/inpsyde/monkery-test-case/compare/2.1.0...master
[2.1.0]:https://github.com/inpsyde/monkery-test-case/compare/2.0.0...2.1.0
[2.0.0]:https://github.com/inpsyde/monkery-test-case/compare/1.1.0...2.0.0
[1.1.0]:https://github.com/inpsyde/monkery-test-case/compare/1.0.0...1.1.0
[1.0.0]:https://github.com/inpsyde/monkery-test-case/tree/1.0.0
