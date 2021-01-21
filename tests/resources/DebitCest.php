<?php

use PHPUnit\Framework\TestCase;

class DebitTest extends TestCase {

    public static function setUpBeforeClass() {
        PagosPyme\SDK::cleanCredentials();
        PagosPyme\SDK::setAccessToken(getenv('ACCESS_TOKEN'));
        PagosPyme\SDK::setApiKey('hola');
        PagosPyme\SDK::setMultipleCredentials(array(
            "MLA" => "MLA_ACCESS_TOKEN"
        ));
    }

    public function testCreateCorrectDebit() {

        $debit = new PagosPyme\Debit();
        $debit->reference = 'Test00000015';
        $debit->client_reference = 'leg000001';            //Aca va el ID de un cliente, no el reference, ojo 
        $debit->internal_reference = '2253979';            //ID de la deuda en el core
        $debit->client_identification_number = '35000000';
        $debit->amount = 20.40;
        $debit->due_date = new \DateTime('tomorrow');
        $debit->amount2 = 20.40;
        $debit->due_date2 = new \DateTime('tomorrow');

        $debit->client_cbu = '12345678';
        $debit->company_name = 'test';
        $debit->cuit = '20350000008';
        $debit->address = 'si';
        $debit->province = 'buenos aires';
        $debit->postal_code = '2';
        $debit->location = 'caba';
        $debit->tentative_debit_date = new \DateTime('now');

        $debit->save();
        $this->assertTrue(is_numeric($debit->id));
        $debit->delete();
    }

}

?>