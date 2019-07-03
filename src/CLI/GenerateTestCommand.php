<?php

/**
 * phpunit-skeleton-generator
 *
 * Copyright (c) 2012-2014, Sebastian Bergmann <sebastian@phpunit.de>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Sebastian Bergmann nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @author    Sebastian Bergmann <sebastian@phpunit.de>
 * @copyright 2012-2014 Sebastian Bergmann <sebastian@phpunit.de>
 * @license   http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @since     File available since Release 2.0.0
 */

namespace CyberPear\PHPUnitSkelGen\CLI;

use CyberPear\PHPUnitSkelGen\AbstractGenerator;
use CyberPear\PHPUnitSkelGen\TestGenerator;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;

/**
 * @author    Sebastian Bergmann <sebastian@phpunit.de>
 * @copyright 2012-2014 Sebastian Bergmann <sebastian@phpunit.de>
 * @license   http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @link      http://github.com/sebastianbergmann/phpunit-skeleton-generator/tree
 * @since     Class available since Release 2.0.0
 */
class GenerateTestCommand extends BaseCommand {

    /**
     * Configures the current command.
     */
    protected function configure() {
        $this->setName('generate-test')
                ->setDescription('Generate a test class based on a class')
                ->addArgument(
                        'class',
                        InputArgument::REQUIRED,
                        'The name of the class to generate a test class for'
                )
                ->addArgument(
                        'class-source',
                        InputArgument::OPTIONAL,
                        'The source file that declared the class to generate a test class for'
                )
                ->addArgument(
                        'test-class',
                        InputArgument::OPTIONAL,
                        'The name of the test class that is to be generated'
                )
                ->addArgument(
                        'test-source',
                        InputArgument::OPTIONAL,
                        'The file to which the generated test code is to be written'
        );

        parent::configure();
    }

    /**
     * @param InputInterface  $input  An InputInterface instance
     * @return AbstractGenerator
     */
    protected function getGenerator(InputInterface $input) {
        return new TestGenerator(
                (string) $input->getArgument('class'),
                (string) $input->getArgument('class-source'),
                (string) $input->getArgument('test-class'),
                (string) $input->getArgument('test-source')
        );
    }

}
