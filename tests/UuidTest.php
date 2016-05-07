<?php

class UuidTest extends \PHPUnit_Framework_TestCase
{
    const UUID_REGEX = '/^[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}$/';

    /**
     * @test
     */
    public function it_generates_valid_uuid_with_both_namespaces()
    {
        $uuid1 = \Rhumsaa\Uuid\Uuid::uuid4();
        $uuid2 = \Ramsey\Uuid\Uuid::uuid4();

        $this->assertRegExp(self::UUID_REGEX, $uuid1->toString());
        $this->assertRegExp(self::UUID_REGEX, $uuid2->toString());
    }

    /**
     * @test
     */
    public function rhumsaa_is_a_valid_rhumsaa()
    {
        $this->assertInstanceOf(
            \Rhumsaa\Uuid\Uuid::class,
            \Rhumsaa\Uuid\Uuid::uuid4()
        );
    }

    /**
     * @test
     */
    public function rhumsaa_is_a_valid_ramsey()
    {
        $this->assertInstanceOf(
            \Ramsey\Uuid\Uuid::class,
            \Rhumsaa\Uuid\Uuid::uuid4()
        );
    }
}
