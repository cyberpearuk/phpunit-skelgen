<?php
namespace SebastianBergmann\PHPUnit\SkeletonGenerator;

use PHPUnit\Framework\TestCase;
use org\bovigo\vfs\vfsStream;

class ClassGeneratorTest extends TestCase
{
    protected function setUp(): void
    {
        vfsStream::setup();
    }

    /**
     * @param        string $testClass
     * @dataProvider provider
     */
    public function testGeneratesCodeCorrectly($testClass)
    {
        $className     = substr($testClass, 0, strlen($testClass) - 4);
        $generatedFile = vfsStream::url('root') . '/' . $className . '.php';

        $generator = new ClassGenerator(
            $testClass,
            __DIR__ . '/_fixture/_input/' . $testClass . '.php',
            $className,
            $generatedFile
        );

        $generator->write();

        $this->assertStringMatchesFormatFile(
            __DIR__ . '/_fixture/_expected/' . $className . '.php',
            file_get_contents($generatedFile)
        );
    }

    public function provider()
    {
        return array(
            array('BowlingGameTest')
        );
    }
}
