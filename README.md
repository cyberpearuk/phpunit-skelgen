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

```bash
    composer require --dev "cyberpearuk/phpunit-skelgen=*"
```

For a system-wide installation via Composer, you can run:

```bash
    composer global require "cyberpearuk/phpunit-skelgen=*"
```

Make sure you have `~/.composer/vendor/bin/` in your path.

## Usage

### Assertion Annotations

`phpunit-skelgen` will generate a test case for each assertion defined in the 
methods doc comment. For example the below will generate 4 test cases:

```php

    /**
     * @assert (0, 0) == 0
     * @assert (0, 1) == 1
     * @assert (1, 0) == 1
     * @assert (1, 1) == 2
     */
    public function add($a, $b) {
        return $a + $b;
    }
```
