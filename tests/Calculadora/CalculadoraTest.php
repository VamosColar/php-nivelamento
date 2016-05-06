<?php

use PhpNivelamento\Calculadora\Soma;

class CalculadoraTest extends PHPUnit_Framework_TestCase
{
	public function testSomaDeDoisNumeros()
	{
		$soma = new Soma();
		$this->assertEquals(5, $soma->executar(2, 3));
	}

	/**
	* @expectedException \InvalidArgumentException
	*/
	public function testAvaliaCampoVazio()
	{
		$soma = new Soma();
		$soma->executar(null, null);
	}

	/**
	* @expectedException \InvalidArgumentException
	*/
	public function testAvaliaUmDosCampoVazio()
	{
		$soma = new Soma();
		$soma->executar(1, null);
	}

	public function testCalcularValorNegativo()
	{
		$soma = new Soma();
		$this->assertEquals(-9, $soma->executar(1, -10));
	}


}
