<?php

namespace CyberPear\PHPUnitSkelGen;

use PHPUnit\Framework\TestCase;
use org\bovigo\vfs\vfsStream;

class TestGeneratorTest extends TestCase {

    protected function setUp(): void {
        vfsStream::setup();
    }

    /**
     * @param        string $className
     * @dataProvider provider
     */
    public function testGeneratesTestCodeCorrectly($className) {
        $generatedFile = vfsStream::url('root') . '/' . $className . 'Test.php';

        $generator = new TestGenerator(
                $className,
                __DIR__ . '/_fixture/_input/' . $className . '.php',
                $className . 'Test',
                $generatedFile
        );

        $generator->write();

        $this->assertStringMatchesFormatFile(
                __DIR__ . '/_fixture/_expected/' . $className . 'Test.php',
                file_get_contents($generatedFile)
        );
    }

    public function provider() {
        return array(
            array('Calculator'),
            array('Calculator2')
        );
    }

}
