<?php
class Farm
{
	//Количесво коров и кур
	const AMOUNT_COW = 10;
	const AMOUNT_CHICKEN = 20;

	private $animalsAgregator;
	private $statistics;

	public function __construct()
	{
		$this->animalsAgregator = new AnimalAgregator();
		$this->statistics = new Statistics();
		$this->createAnimals();
	}

	public function getAnimalsAgregator()
	{
		return $this->animalsAgregator;
	}

	public function getStatistics()
	{
		return $this->statistics;
	}

	public function createAnimals()
	{
		for ($i=0; $i < static::AMOUNT_COW; $i++) { 
			$this->animalsAgregator->createAnimal('Cow');
		}
		for ($i=0; $i < static::AMOUNT_CHICKEN; $i++) { 
			$this->animalsAgregator->createAnimal('Chicken');
		}
	}

	public function harvestProduct()
	{
		$currentIdHarvest = $this->statistics->getLastId() + 1;

		foreach ($this->animalsAgregator->getAnimals() as $idAnimal => $objectAnimal) {

			$this->statistics->add($currentIdHarvest, $objectAnimal->getProduct());

		}

	}
}