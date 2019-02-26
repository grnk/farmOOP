<?php

class Product
{

	public $nameProduct;
	public $amountProduct;
	public $unitProduct;

	public function __construct($nameProduct, $amountProduct, $unitProduct) 
	{
		$this->nameProduct = $nameProduct;
		$this->amountProduct = $amountProduct;
		$this->unitProduct = $unitProduct;
	}
}