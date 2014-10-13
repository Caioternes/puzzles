<?php
require_once "scr/autores.php";

class AutorTest extends PHPUnit_Framework_TestCase
{
    public function testSomenteSobrenome()
    {
        $autor = new Autor("Guimaraes");
        $this->assertEquals("GUIMARAES", $autor->formatar());
    }

    /*public function testNomeMaisUmSobrenome()
    {
        $autor = new Autor("Joao Silva");
        $this->assertEquals("SILVA, Joao", $autor->formatar());
    }

    public function testNomeEmMinusculo()
    {
        $autor = new Autor("joao silva");
        $this->assertEquals("SILVA, Joao", $autor->formatar());
    }

    public function testNomeEmMaiusculo()
    {
        $autor = new Autor("JOAO SILVA");
        $this->assertEquals("SILVA, Joao", $autor->formatar());
    }

    public function testNomeComDA()
    {
        $autor = new Autor("Joao da Silva");
        $this->assertEquals("SILVA, Joao da", $autor->formatar());
    }

    public function testNomeComDE()
    {
        $autor = new Autor("Pedro de Jesus");
        $this->assertEquals("JESUS, Pedro de", $autor->formatar());
    }

    public function testNomeComDO()
    {
        $autor = new Autor("Maria do Bonfim");
        $this->assertEquals("BONFIM, Maria do", $autor->formatar());
    }

    public function testNomeComDAS()
    {
        $autor = new Autor("Ana das Rosas");
        $this->assertEquals("ROSAS, Ana das", $autor->formatar());
    }

    public function testNomeComDOS()
    {
        $autor = new Autor("Mario dos Anjos");
        $this->assertEquals("ANJOS, Mario dos", $autor->formatar());
    }

    public function testNomeComNeto()
    {
        $autor = new Autor("Joao da Silva Neto");
        $this->assertEquals("SILVA NETO, Joao da", $autor->formatar());
    }

    public function testNomeComFilho()
    {
        $autor = new Autor("Joao da Silva Filho");
        $this->assertEquals("SILVA FILHO, Joao da", $autor->formatar());
    }

    public function testNomeComSobrinho()
    {
        $autor = new Autor("Joao da Silva Sobrinho");
        $this->assertEquals("SILVA SOBRINHO, Joao da", $autor->formatar());
    }

    public function testNomeComJunior()
    {
        $autor = new Autor("Joao da Silva Junior");
        $this->assertEquals("SILVA JUNIOR, Joao da", $autor->formatar());
    }*/
}

?>
