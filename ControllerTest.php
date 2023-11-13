<?php
require_once 'Main.php';

use PHPUnit\Framework\TestCase;

class ControllerTest extends TestCase
{
    
    public function test_get_model()
    {
        $d = new YahtzeeDice();
        $sut = new Yahtzee($d);
        
        $view = new YahtzeeView($sut);
        
        $cont = new YahtzeeController($sut, $view);
        
        
        $this->assertEquals($cont->get_model(), $sut);
    }

    public function test_get_view()
    {
        $d = new YahtzeeDice();
        $sut = new Yahtzee($d);
        
        $view = new YahtzeeView($sut);

        $cont = new YahtzeeController($sut, $view);


        $this->assertEquals($cont->get_view(), $view);
    }
}

?>