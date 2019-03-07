<?php

require_once(__DIR__."/IVeiculos.php");

abstract class Veiculos implements IVeiculos //class abstract é um modelo para as outras class que extends ela 
{
	public $brand;
	protected $color;
	public $engine;

	public function __construct($brand = null, $color = null, $engine = null) 
	{
		$this->brand = $brand;
		$this->color = $color;
		$this->engine = $engine;
	}

	public function getColors() 
	{
		return $this->color;
	}

	public function getEngine() 
	{
		return $this->engine;
	}

	abstract public function getBrand(); //method abstract força todas as outras class que extends a class veiculo a ter esse method

}