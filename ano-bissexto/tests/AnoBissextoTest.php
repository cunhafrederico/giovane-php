<?php
class AnoBissextoTest extends PHPUnit_Framework_TestCase
{
    // Testa os anos que devem ser bissextos
    // "São bissextos por exemplo: 1600 1732 1888 1944 2008"

    public function testSuccess()
    {
        
        $this->assertTrue(AnoBissexto::_ehBissexto(1600));
    }

}