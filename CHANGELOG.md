# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]

## [5.0.0]

* Update Mockery to `^1.0`, see https://github.com/mockery/mockery/blob/master/CHANGELOG.md#100-2017-09-06
* Remove platform config from composer.json
* Bumped required php version to 5.6 along with Mockery

## [4.0.0]

* Updated to BrainMonkey version 2.* that includes:
    * **Removed** Configuration of patchwork cache
    * Simplified bootstrap file

## [3.1.1]
* Lock version of brain/monkey to 1.4-branch

## [3.1.0]
* Added: configure patchwork cache directory via environment variables

## [3.0.0]
* **Breaking**: Drop PHPUnit 4.* support. You need at least PHPUnit 5.7 to use this package

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

[Unreleased]:https://github.com/inpsyde/monkery-test-case/compare/5.0.0...master
[4.0.0]:https://github.com/inpsyde/monkery-test-case/compare/4.0.0...5.0.0
[4.0.0]:https://github.com/inpsyde/monkery-test-case/compare/3.1.1...4.0.0
[3.1.1]:https://github.com/inpsyde/monkery-test-case/compare/3.1.0...3.1.1
[3.1.0]:https://github.com/inpsyde/monkery-test-case/compare/3.0.0...3.1.0
[3.0.0]:https://github.com/inpsyde/monkery-test-case/compare/2.1.0...3.0.0
[2.1.0]:https://github.com/inpsyde/monkery-test-case/compare/2.0.0...2.1.0
[2.0.0]:https://github.com/inpsyde/monkery-test-case/compare/1.1.0...2.0.0
[1.1.0]:https://github.com/inpsyde/monkery-test-case/compare/1.0.0...1.1.0
[1.0.0]:https://github.com/inpsyde/monkery-test-case/tree/1.0.0
