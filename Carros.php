<?php

require_once(__DIR__."/Veiculos.php");

class Carros extends Veiculos
{
	private $doors;

	public function setDoors($doors = null) {
		$this->doors = $doors;
	}

	public function getDoors() {
		return $this->doors;
	}

	public function getBrand() //method obrigatoria para todas as class que extends Veiculos
	{

	}
}