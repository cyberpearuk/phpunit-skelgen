# PHPUnit 8 Skeleton Generator

`phpunit-skelgen` is a tool that can generate skeleton test classes from production
 code classes and vice versa.

This is a fork of the original [`sebastianbergmann/phpunit-skeleton-generator`](https://github.com/sebastianbergmann/phpunit-skeleton-generator)
which was abondoned at ~v4 of PHPUnit, to provide support for PHPUnit 8 and PHP7.1.

This fork is maintained by [www.cyberpear.co.uk](https://www.cyberpear.co.uk).

## Installation

### Composer

Simply add a development dependency on `cyberpearuk/phpunit-skelgen` to your project
using [Composer](http://getcomposer.org/):

    composer require --dev "cyberpearuk/phpunit-skelgen=*"

For a system-wide installation via Composer, you can run:

    composer global require "cyberpearuk/phpunit-skelgen=*"

Make sure you have `~/.composer/vendor/bin/` in your path.

