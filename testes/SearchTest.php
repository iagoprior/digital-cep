<?php

use PHPUnit\Framework\TestCase;
use iagoprior\digitalcep\Search;

class SearchTest extends TestCase{
    public function testGetAddresFromZipcodeDefaultUsage(){
        $resultado = new Search;
        $resultado->getAddresFromZipcode('03624010');
        
        
        $this->assertEquals($resultado);
    }
}