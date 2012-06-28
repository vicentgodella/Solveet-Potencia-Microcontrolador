<?php

class PotenciaMicrocontrolador {
	public function calcula($base, $exponente)
	{
		if($base == 1)
		{
			return 1;
		}

		$resultado = $base;
		for($i = 1; $i < $exponente; $i++)
		{
			$resultado = $this->multiplicar($resultado, $base);
		}

		return $resultado;
	}

	private function multiplicar($operando1, $operando2)
	{
		if($operando1 > $operando2)
		{
			$factor = $operando1;
			$ciclos = $operando2;
		}
		else
		{
			$factor = $operando2;
			$ciclos = $operando1;
		}

		$producto = 0;
		for($i = 0; $i < $ciclos; $i++)
		{
			$producto += $factor;
		}
		
		return $producto;
	}
}

?>