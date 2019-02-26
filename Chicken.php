<?php

class Chicken extends AbstractAnimal
{
	const PRODUCT_AMOUNT_MIN = 0;
	const PRODUCT_AMOUNT_MAX = 1;

	public $idAnimal;
	public $typeAnimal = 'Chicken';
	public $nameProduct = 'Egg';
	public $unitProduct = 'Piece';

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