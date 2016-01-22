<?php

class EfeitoMagneticoTest extends PHPUnit_Framework_TestCase
{

	// Exemplos que devem passar

	public function testSucesso()
	{
		/* "Se existe um ponto magnético na coordenada (50, 50) e o raio de efeito magnético é 5, quando o curso é movido para a posição (49,50), o efeito magnético atua e força com que o desenho seja feito a partir do ponto (50,50);
			Se existe um ponto magnético em (50, 50), o raio de efeito magnético é 5 e o cursor está em (0, 0), não ocorre o efeito magnético;
			Se existem dois pontos magnéticos em (50, 50) e (100, 50), quando o mouse está em (101, 48), o efeito magnético faz com que você comece a desenhar em (100, 50);
			Se os pontos magnéticos são (50, 50) e (51, 51) e o mouse está em (51, 52), o desenho se inicia em (51, 51)" 
		*/

		$em = new EfeitoMagnetico('50:50', '5', '49:50');
		$this->assertEquals($em->calculaPonto(), array('x' => 50, 'y' => 50));

		$em = new EfeitoMagnetico('50:50', '5', '0:0');
		$this->assertEquals($em->calculaPonto(), array('x' => 0, 'y' => 0));

		$em = new EfeitoMagnetico('50:50,100:50', '5', '101:48');
		$this->assertEquals($em->calculaPonto(), array('x' => 100, 'y' => 50));

		$em = new EfeitoMagnetico('50:50,51:51', '5', '51:52');
		$this->assertEquals($em->calculaPonto(), array('x' => 51, 'y' => 51));

		// bônus
		$em = new EfeitoMagnetico('50:50,51:51,0:0', '5', '10:10');
		$this->assertEquals($em->calculaPonto(), array('x' => 10, 'y' => 10));

	}
}