<?php

class Cow extends AbstractAnimal
{
	const PRODUCT_AMOUNT_MIN = 8;
	const PRODUCT_AMOUNT_MAX = 12;

	public $idAnimal;
	public $typeAnimal = 'Cow';
	public $nameProduct = 'Milk';
	public $unitProduct = 'Liter';

	public function getProduct()
	{
		$product = new Product( $this->nameProduct, $this->unitProduct, $this->generateAmountProduct() );

		return $product;
	}

	protected function generateAmountProduct()
	{
		return rand(static::PRODUCT_AMOUNT_MIN, static::PRODUCT_AMOUNT_MAX);
	}

}