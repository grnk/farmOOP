<?php
class AnimalAgregator
{
	private $animals = [];

	public function getAnimals()
	{
		return $this->animals;
	}

	//Создаём животное
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

	//Добавляем животное в общий массив
	private function addAnimal($animal)
	{
		if( !empty($animal) ) {
			$this->animals[$animal->idAnimal] = $animal;
		} else {
			echo "error add animal";
		}
	}
}