<?php 

 

/**
 * EntityTest Class Doc Comment
 *
 * @package PagosPyme
 */
class PreApprovalTest extends \PHPUnit\Framework\TestCase
{

    private static $last_preapproval;

    public static function setUpBeforeClass()
    {   
        PagosPyme\SDK::cleanCredentials();
        
        if (file_exists(__DIR__ . '/../../.env')) {
            $dotenv = new Dotenv\Dotenv(__DIR__, '../../.env');
            $dotenv->load();
        }

        PagosPyme\SDK::setClientId(getenv('CLIENT_ID'));
        PagosPyme\SDK::setClientSecret(getenv('CLIENT_SECRET')); 
    }

    public function testCreatePrefence()
    {
        $preapproval_data = new PagosPyme\Preapproval();
        $preapproval_data->payer_email = "dummy@mail.com";
        $preapproval_data->back_url = "https://google.com";
        $preapproval_data->reason = "Reason PreApproval";
        $preapproval_data->external_reference =  "VIP-0000";
        $preapproval_data->auto_recurring = array( 
                "frequency" => 1, 
                "frequency_type" => "months",
                "transaction_amount" => 60,
                "currency_id" => "ARS"
        );

        $preapproval_data->save();

        $this->assertTrue($preapproval_data->sandbox_init_point != null);

    }

}

?>