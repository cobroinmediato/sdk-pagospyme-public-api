<?php

use PHPUnit\Framework\TestCase;

/**
 * EntityTest Class Doc Comment
 *
 * @package PagosPyme
 */
class ConfigTest extends TestCase {

    /**
     * This is commented out because it needs DotEnv
     */
    
    
//    public static function setUpBeforeClass() {
//
//        PagosPyme\SDK::cleanCredentials();
//
//        if (file_exists(__DIR__ . '/../.env')) {
//            $dotenv = new Dotenv\Dotenv(__DIR__, '/../.env');
//            $dotenv->load();
//        }
//
//        PagosPyme\SDK::setClientId(getenv('CLIENT_ID'));
//        PagosPyme\SDK::setClientSecret(getenv('CLIENT_SECRET'));
//    }
//
//    /**
//     * @covers                   PagosPyme\SDK
//     */
    public function testSettings() {
        $this->assertEquals(getenv('CLIENT_ID'), PagosPyme\SDK::getClientId());
        $this->assertEquals(getenv('CLIENT_SECRET'), PagosPyme\SDK::getClientSecret());
    }
//
//    /**
//     * @covers                   PagosPyme\SDK
//     */
//    public function testDoGetToken() {
//        $this->assertNotNull(PagosPyme\SDK::getAccessToken());
//    }

}
