<?php

namespace PagosPyme;

/**
 * EntityTest Class Doc Comment
 *
 * @package PagosPyme
 */
class MercadopagoSdkTest extends \PHPUnit\Framework\TestCase
{
    /**
     *
     */
    protected function setUp()
    {
        Entity::unSetManager();
    }

    /**
     *
     */
    protected function tearDown()
    {
    }

    /**
     * @expectedException        \Exception
     * @expectedExceptionMessage Please initialize SDK first
     */
    public function testWrongInitialization()
    {
        $entity = new DummyEntity();
    }

    /**
     */
    public function testInitialization()
    {
        SDK::initialize();
        $entity = new DummyEntity();
        $this->assertInstanceOf(DummyEntity::class, $entity);
    }


}