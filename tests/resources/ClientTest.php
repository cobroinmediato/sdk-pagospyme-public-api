<?php

use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase {

    public static function setUpBeforeClass() {
        PagosPyme\SDK::cleanCredentials();
        PagosPyme\SDK::setAccessToken(getenv('ACCESS_TOKEN'));
        PagosPyme\SDK::setMultipleCredentials(
                array(
                    "MLA" => "MLA_ACCESS_TOKEN"
                )
        );
    }

    public function testCreateCorrectClient() {

        $client = new PagosPyme\Client();
        $client->identification_number = 00000001;
        $client->reference = "Test00003";
        $client->name = "Aoshido001";
        $client->email = "Aoshdo";

        $client->save();
        $this->assertTrue(is_numeric($client->id));
        $client->delete();
    }

    public function testCreateIncompleteClient() {

        $client = new PagosPyme\Client();
        $client->identification_number = 00000001;
//        $client->reference = "Test00003";

        try {
            $client->save();
        } catch (\Exception $ex) {
            $this->assertEquals($ex->getMessage(),'Error required in attribute reference');
        }
    }

}

?>