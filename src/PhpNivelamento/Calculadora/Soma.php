<?php
//declare(strict_type=1);
namespace PhpNivelamento\Calculadora;


class Calculadora
{
	protected function sis()
	{
		return 'Allan';
	}

	public function executar()
	{
		return 'Ele é ' + self::sis();
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
		return $this->sis();
	}
}

$Calculadora = new Calculadora();
echo $Calculadora->executar();

