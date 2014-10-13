<?php
require_once "scr/telefone.php";

class TelefoneTest extends PHPUnit_Framework_TestCase
{
	public function testSoCom1()
    {
        $telefone = new Telefone("11");
        $this->assertEquals("11", $telefone->numeroTelefone());
    }
	
	public function testSoCom0()
    {
        $telefone = new Telefone("00");
        $this->assertEquals("00", $telefone->numeroTelefone());
    }
	
	public function testSoHifen()
    {
        $telefone = new Telefone("--");
        $this->assertEquals("--", $telefone->numeroTelefone());
    }
	
	public function testCom2()
    {
        $telefone = new Telefone("ABC");
        $this->assertEquals("222", $telefone->numeroTelefone());
    }
	
	public function testCom3()
    {
        $telefone = new Telefone("DEF");
        $this->assertEquals("333", $telefone->numeroTelefone());
    }
	
	public function testCom4()
    {
        $telefone = new Telefone("GHI");
        $this->assertEquals("444", $telefone->numeroTelefone());
    }
	
	public function testCom5()
    {
        $telefone = new Telefone("JKL");
        $this->assertEquals("555", $telefone->numeroTelefone());
    }
	
	public function testCom6()
    {
        $telefone = new Telefone("MNO");
        $this->assertEquals("666", $telefone->numeroTelefone());
    }
	
	public function testCom7()
    {
        $telefone = new Telefone("PQRS");
        $this->assertEquals("7777", $telefone->numeroTelefone());
    }
	
	public function testCom8()
    {
        $telefone = new Telefone("TUV");
        $this->assertEquals("888", $telefone->numeroTelefone());
    }
	
	public function testCom9()
    {
        $telefone = new Telefone("WXYZ");
        $this->assertEquals("9999", $telefone->numeroTelefone());
    }
	
	public function testSomenteLetras()
    {
        $telefone = new Telefone("CaioTernesWessling");
        $this->assertEquals("224683763793775464", $telefone->numeroTelefone());
    }
	
	public function testCom1()
    {
        $telefone = new Telefone("1CaioTernesWessling");
        $this->assertEquals("1224683763793775464", $telefone->numeroTelefone());
    }
	
	public function testComHifen()
    {
        $telefone = new Telefone("1Caio-Ternes-Wessling");
        $this->assertEquals("12246-837637-93775464", $telefone->numeroTelefone());
    }
	
	public function testCom0noFinal()
    {
        $telefone = new Telefone("1Caio-Ternes-Wessling0");
        $this->assertEquals("12246-837637-937754640", $telefone->numeroTelefone());
    }
}

?>
