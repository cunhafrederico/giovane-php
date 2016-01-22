<?php

class EfeitoMagneticoTest extends PHPUnit_Framework_TestCase
{

	// Exemplos que devem passar

	public function testSucesso()
	{
		$em = new EfeitoMagnetico('50:50', '5', '49:50');
		$this->assertEquals($em->calculaPonto(), array('x' => 50, 'y' => 50));
	}
}