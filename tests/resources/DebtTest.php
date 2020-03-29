<?php

use PHPUnit\Framework\TestCase;

class DebtTest extends TestCase {

    public static function setUpBeforeClass() {
        PagosPyme\SDK::cleanCredentials();
        PagosPyme\SDK::setAccessToken(getenv('ACCESS_TOKEN'));
        PagosPyme\SDK::setMultipleCredentials(
                array(
                    "MLA" => "MLA_ACCESS_TOKEN"
                )
        );
    }

    public function testCreateCorrectDebt() {

        $debt = new PagosPyme\Debt();
        $debt->reference = 'Test00000006';
        $debt->client_reference = '2253979';            //Aca va el ID de un cliente, no el reference, ojo 
        $debt->client_identification_number = '35000000';
        $debt->amount = 20.40;
        $debt->due_date = new \DateTime('now');
        $debt->amount2 = 20.40;
        $debt->due_date2 = new \DateTime('now');
        
        $debt->save();
        $this->assertTrue(is_numeric($debt->id));
        $debt->delete();
    }

//    public function testCreateIncompleteDebt() {
//        
//    }

}

?>