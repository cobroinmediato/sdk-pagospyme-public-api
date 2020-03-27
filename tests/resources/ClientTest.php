<?php

use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase {

    public static function setUpBeforeClass() {
        PagosPyme\SDK::cleanCredentials();
        PagosPyme\SDK::setAccessToken(getenv('ACCESS_TOKEN'));
        PagosPyme\SDK::setApiKey('hola');
        PagosPyme\SDK::setMultipleCredentials(array(
            "MLA" => "MLA_ACCESS_TOKEN"
        ));
    }

    public function testCreateCorrectClient() {

        $client = new PagosPyme\Client();
        $client->identification_number = 00000001;
        $client->reference = "Test00007";
        $client->name = "Aoshido001";
        $client->email = "Aoshdo";

        $client->save();
        $this->assertEquals('Aoshido001', $client->name);
        $this->assertTrue(is_numeric($client->id));

        $client->delete();
    }

    public function testCreateAndUpdateClient() {

        $client = new PagosPyme\Client();
        $client->identification_number = 00000001;
        $client->reference = "Test00007";
        $client->name = "Aoshido001";
        $client->email = "Aoshdo";

        $client->save();
        $this->assertEquals('Aoshido001', $client->name);
        $this->assertTrue(is_numeric($client->id));

        $client->name = "Aoshido002";
        $client->save();
        $this->assertEquals('Aoshido002', $client->name);

        $client->delete();
    }

    public function testCreateExistingClient() {

        $client = new PagosPyme\Client();
        $client->identification_number = 00000001;
        $client->reference = "Test00007";
        $client->name = "Aoshido001";
        $client->email = "Aoshdo";

        $client->save();
        $this->assertEquals('Aoshido001', $client->name);
        $this->assertTrue(is_numeric($client->id));

        $client2 = new PagosPyme\Client();
        $client2->identification_number = 00000001;
        $client2->reference = "Test00007";
        $client2->name = "Aoshido001";
        $client2->email = "Aoshdo";

        try {
            $client2->save();
        } catch (Exception $ex) {
            $this->assertEquals('Internal API Error', $ex->getMessage());
        }

        $client->delete();
    }

    public function testCreateIncompleteClient() {

        $client = new PagosPyme\Client();
        $client->identification_number = 00000001;
//        $client->reference = "Test00003";

        try {
            $client->save();
        } catch (\Exception $ex) {
            $this->assertEquals($ex->getMessage(), 'Error required in attribute reference');
        }
    }

}

?>