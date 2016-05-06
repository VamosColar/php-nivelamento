<?php

interface SistemaCalculadora
{
	public function executar();
}

class Calculadora implements SistemaCalculadora
{
	protected function sis()
	{
		return 'Allan';
	}

	public function executar()
	{
		return 'Ele e ' . $this->sis();
	}
}

class Somas extends Calculadora
{
	protected function sis()
	{
		return 'Edy';
	}

	public function executar()
	{
		return parent::executar();
	}

}

class CalculadoraDeTeuan
{
	protected $sis;

	public function __construct(SistemaCalculadora $sis)
	{
		$this->sis = $sis;
	}

	public function testarValoresDoBanco()
	{
		return $this->sis->executar();
	}
	
}

$calculadora = new Somas();
$calTeuan = new CalculadoraDeTeuan($calculadora);

$cal = new Calculadora();
$novaCalTeuan = new CalculadoraDeTeuan($cal);


echo $calTeuan->testarValoresDoBanco();
echo "<br>";
echo $novaCalTeuan->testarValoresDoBanco();
