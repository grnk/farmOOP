<?php

class Product
{

	public $animal;
	public $nameProduct;
	public $amountProduct;
	public $unitProduct;

	public function __construct($animal ,$nameProduct, $unitProduct, $amountProduct ) 
	{		
		$this->animal = $animal;
		$this->nameProduct = $nameProduct;
		$this->unitProduct = $unitProduct;
		$this->amountProduct = $amountProduct;
	}
}