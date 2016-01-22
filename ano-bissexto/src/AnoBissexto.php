<?php

class AnoBissexto {
	
	public static function ehBissexto($ano = false)
	{
		if ($ano === false) {
			// dispara erro
		}


		if ($this::_ehBissexto($ano)) {
			$mensagem = 'é um ano bissexto';	
		} else {
			$mensagem = 'não é um ano bissexto';	
		}

		printf('%d %s', $ano, $mensagem);

	}

	private static _ehBissexto($ano)
	{
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