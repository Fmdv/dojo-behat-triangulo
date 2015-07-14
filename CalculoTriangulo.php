<?php

class CalculoTriangulo 
{
	public $lado1;
	public $lado2;
	public $lado3;
	public $list;

	private $gabarito = array(
		1 => 'equilatero', 
		2 => 'isosceles', 
		3 => 'escaleno'
	);

	public function verificaTriangulo()
	{
		$this->putInArray();
		$totalLado = count(array_unique($this->list));
		
		return $this->gabarito[$totalLado];
	}

	private function putInArray()
	{
		$this->list[] = $this->lado1;
		$this->list[] = $this->lado2;
		$this->list[] = $this->lado3;
	}

}