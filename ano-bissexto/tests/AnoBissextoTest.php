<?php



class AnoBissextoTest extends PHPUnit_Framework_TestCase
{
    // Testa os anos que devem ser bissextos
    // "São bissextos por exemplo: 1600 1732 1888 1944 2008"

    public function testSuccess()
    {
        
        $this->assertTrue(AnoBissexto::_ehBissexto(1600));
        $this->assertTrue(AnoBissexto::_ehBissexto(1732));
        $this->assertTrue(AnoBissexto::_ehBissexto(1888));
        $this->assertTrue(AnoBissexto::_ehBissexto(1944));
        $this->assertTrue(AnoBissexto::_ehBissexto(2008));
    }

    // Testa os anos que não são bissextos
    // "Não são bissextos por exemplo: 1742 1889 1951 2011"

    public function testFail()
    {

        $this->assertFalse(AnoBissexto::_ehBissexto(1742));
        $this->assertFalse(AnoBissexto::_ehBissexto(1889));
        $this->assertFalse(AnoBissexto::_ehBissexto(1951));
        $this->assertFalse(AnoBissexto::_ehBissexto(2011));

    }

}