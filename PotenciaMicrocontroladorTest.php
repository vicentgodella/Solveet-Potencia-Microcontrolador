<?php
require_once('PotenciaMicrocontrolador.php');

class PotenciaMicrocontroladorTest extends PHPUnit_Framework_TestCase
{
    private $potencia;

    protected function setUp()
    {
        $this->potencia = new PotenciaMicrocontrolador();
    }

    public function testcalculaDevuelve1SiBaseEs1ExponenteEs1()
    {
        $this->assertEquals(1, $this->potencia->calcula(1, 1));
    }

    public function testcalculaDevuelve1SiBaseEs3ExponenteEs1()
    {
        $this->assertEquals(3, $this->potencia->calcula(3, 1));
    }

    public function testcalculaDevuelve8SiBaseEs2ExponenteEs3()
    {
        $this->assertEquals(8, $this->potencia->calcula(2, 3));
    }

    public function testcalculaDevuelve78125SiBaseEs5ExponenteEs7()
    {
        $this->assertEquals(78125, $this->potencia->calcula(5, 7));
    }
}
?>