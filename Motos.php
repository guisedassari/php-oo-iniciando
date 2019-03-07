<?php

require_once(__DIR__."/Veiculos.php");

class Motos extends Veiculos
{
	
	public function __construct($brand = null, $color = null, $engine = null) 
	{
		parent::__construct($brand, strtoupper($color), $engine);
	}

	public function getBrand() //method obrigatoria para todas as class que extends Veiculos
	{

	}
}