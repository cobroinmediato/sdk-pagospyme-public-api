<?php

use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase {

    public static function setUpBeforeClass() {
        PagosPyme\SDK::cleanCredentials();
        PagosPyme\SDK::setAccessToken(getenv('ACCESS_TOKEN'));
        PagosPyme\SDK::setApiKey('hola');
        PagosPyme\SDK::setMultipleCredentials(array(
            "MLA" => "MLA_ACCESS_TOKEN"
        ));
    }

    public function testReadPaymentById() {
        $payment = \PagosPyme\Payment::read(array(
            'id' => "181770"
        ));
        
        $this->assertTrue($payment instanceof \PagosPyme\Payment);
        $this->assertEquals('181770', $payment->id);
    }
    
    public function testRefundPayment() {        
        
        $trace = "63fc7f62a0c297cf6ddabb719907651b";   
        
        $response = \PagosPyme\Payment::refund($trace);         
               
        $this->assertTrue($response);
    }
}

?>