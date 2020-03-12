<?php 

use PHPUnit\Framework\TestCase;

/**
 * EntityTest Class Doc Comment
 *
 * @package PagosPyme
 */
class InstoreTest extends TestCase
{

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

    public function testCreatePos() {
        $pos = new PagosPyme\POS();
        $pos->name = "mypointofsale";
        $pos->fixed_amount =true; 
        $pos->external_id = "mypos" . rand(1, 10000);

        $pos->save();
        $this->assertEquals($pos->status, 'active');
        return $pos;
    }

    /**
     * @depends testCreatePos
     */
    public function testUpdatePos(PagosPyme\POS $created_pos) {
        $created_pos->name = "mypointofsalenewname";
        $created_pos->update();

        $pos = PagosPyme\POS::find_by_id($created_pos->id);

        $this->assertEquals($pos->name, 'mypointofsalenewname');
        
    }

    /**
     * @depends testCreatePos 
     */
    public function testSearchPos(PagosPyme\POS $pos) {
        $filters = array(
            "external_id" => $pos->external_id
        );
        $poss = PagosPyme\POS::search($filters);
        $last_pos = end($poss);

        $this->assertEquals($last_pos->external_id, $pos->external_id);
    }

    

    // public function testDeletePos(PagosPyme\POS $pos) {
    //     $pos = new PagosPyme\POS();

    // }

}

?>