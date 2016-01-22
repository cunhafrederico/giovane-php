<?php

class EfeitoMagnetico {
	
	public function __construct($pontos='', $raio='0', $cursor='')
	{
		try {
			
			$this->pontos = $this->clearPontos($pontos);
			$this->raio = $this->clearRaio($raio);
			$this->cursor = $this->clearCursor($cursor);	

		} catch (Exception $e) {
			// Tratar erros aqui
			echo 'Infelizmente ocorreu algum erro na criação do objeto';
		}
	}

	private function clearPontos($pontos)
	{
		$clean = array();
		if (sizeof($pontos) > 0) {
			$pares = explode(',', $pontos);
			foreach ($pares as $par) {
				$p = explode(':', $par);
				if (sizeof($p) != 2){
					// Formato e entrada inválido
					throw new Exception('Lista de pontos mal formatada. A lista deve vir no formato: x1:y1,x2:y2,...,xn:yn', 1);
				}
				
				$clean[] = array(
					'x' => $this->normaliza($p[0]), 
					'y' => $this->normaliza($p[1])
				);
			}
		}

		return $clean;
	}

	private function clearRaio($raio)
	{
		return $this->normaliza($raio);
	}

	private function clearCursor($cursor)
	{
		$p = explode(':', $cursor);
		if (sizeof($p) != 2){
			// Formato e entrada inválido
			throw new Exception('Cursor mal formatado. O cursor deve vir no formato: x:y', 1);
		}

		return array(
			'x' => $this->normaliza($p[0]), 
			'y' => $this->normaliza($p[1])
		);
	}

	public function normaliza($n)
	{
		if (!is_numeric($n)){
			throw new Exception("Entrada inválida. Um número é esperado.", 1);
		}

		return (int) $n;
	}

	public function calculaPonto()
	{

		$menor_dist = PHP_INT_MAX;
		$closer = null;

		$novo_cursor = $this->cursor;

		foreach ($this->pontos as $ponto) {
			$dist = $this->calculaDistancia($this->cursor['x'], $this->cursor['y'], $ponto['x'], $ponto['y']);
			// XXX: E se tiverem dois ou mais pontos com a mesma distância?
			//		Seria interessante calcular os vetores e decidir o ponto, que poderia ser o mesmo do cursor
			//		caso as forças se anulassem [giovane 2016-01-22]
			if ($dist < $menor_dist){
				$menor_dist = $dist;
				$closer = $ponto;
			}
		}

		if ($menor_dist <= $this->raio){
			$novo_cursor = $closer;
		}

		return $novo_cursor;
	}

	public function calculaDistancia($x1, $y1, $x2, $y2)
	{
		return sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2));
	}

}