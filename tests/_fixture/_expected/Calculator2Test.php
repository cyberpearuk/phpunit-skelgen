<?php
/**
 * Generated by PHPUnit_SkeletonGenerator on %s at %s.
 */
class Calculator2Test extends PHPUnit\Framework\TestCase
{
    /**
     * @var Calculator2
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new Calculator2;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }

    /**
     * Generated from @assert (0, 0) == 0.
     *
     * @covers Calculator2::add
     */
    public function testAdd()
    {
        $this->assertEquals(
            0,
            $this->object->add(0, 0)
        );
    }

    /**
     * Generated from @assert (0, 1) == 1.
     *
     * @covers Calculator2::add
     */
    public function testAdd2()
    {
        $this->assertEquals(
            1,
            $this->object->add(0, 1)
        );
    }

    /**
     * Generated from @assert (1, 0) == 1.
     *
     * @covers Calculator2::add
     */
    public function testAdd3()
    {
        $this->assertEquals(
            1,
            $this->object->add(1, 0)
        );
    }

    /**
     * Generated from @assert (1, 1) == 2.
     *
     * @covers Calculator2::add
     */
    public function testAdd4()
    {
        $this->assertEquals(
            2,
            $this->object->add(1, 1)
        );
    }
}
