<?php
abstract class AbstractAnimal
{
	public $idAnimal;
	public $typeAnimal;

	public function __construct() {
		$this->idAnimal = $this->generateId();
	}

	private function generateId() {
		return uniqid();
	}
}