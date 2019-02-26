<?php
class AnimalAgregator
{
	public $animals = [];

	public function createAnimal($typeAnimal)
	{
		if($typeAnimal === 'Cow') {
			$animal = new Cow();
		}

		if($typeAnimal === 'Chicken') {
			$animal = new Chicken();
		}

		$this->addAnimal($animal);
	}


	private function addAnimal($animal)
	{
		if( !empty($animal) ) {
			$this->animals[$animal->idAnimal] = $animal;
		} else {
			echo "error add animal";
		}
	}
}