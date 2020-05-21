# PHPUnit 8 Skeleton Generator

[![Build Status](https://travis-ci.com/cyberpearuk/phpunit-skeleton-generator.svg?branch=master)](https://travis-ci.com/cyberpearuk/phpunit-skeleton-generator)
[![codecov](https://codecov.io/gh/cyberpearuk/phpunit-skelgen/branch/master/graph/badge.svg)](https://codecov.io/gh/cyberpearuk/phpunit-skelgen)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/07434235635b4d25870020d333b3c96a)](https://www.codacy.com/app/jbuncle/phpunit-skelgen?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=cyberpearuk/phpunit-skelgen&amp;utm_campaign=Badge_Grade)
[![Packagist](https://img.shields.io/packagist/v/cyberpearuk/phpunit-skelgen.svg)](https://packagist.org/packages/cyberpearuk/phpunit-skelgen)

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

### CLI

`./vendor/bin/phpunit-skelgen --ansi generate-test <namespace> <src-file> <test-class-name> <tst-file>`

```bash
./vendor/bin/phpunit-skelgen --ansi generate-test "My\Namespace" "path/to/src/class" "My\Namespace\ClassNameTest" "/path/to/tests/class"
```

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

## Maintainer

This repository is maintained by [Black Pear Digital](https://www.blackpeardigital.co.uk).

