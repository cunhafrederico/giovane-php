<?php

class AnoBissexto {
	
	public static function ehBissexto($ano = false)
	{
		try {

			if (self::_ehBissexto($ano)) {
				$mensagem = 'é um ano bissexto';	
			} else {
				$mensagem = 'não é um ano bissexto';	
			}

			printf('%d %s', $ano, $mensagem);
			
		} catch (Exception $e) {
			// captura o erro de falta de argumento e escreve uma mensagem bonita
			echo "Nenhum ano foi informado. Por favor, informe um ano";
		}

	}

	public static function _ehBissexto($ano = false)
	{

		if ($ano === false) {
			// criar classe específica de erro
			throw new Exception("Nenhum ano especificado", 1);
		}

		if ($ano % 4 != 0) {
			return false;
		}

		if ($ano % 100 == 0) {
			if ($ano % 400 != 0) {
				return false;
			}
		}

		return true;
	}

}