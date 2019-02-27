<?php
class Statistics
{
	private $data = [];

	public function getData()
	{
		return $this->data;
	}

	public function getLastId()
	{
		if( empty($this->data) ) {
			return -1;
		}

		return (count($this->data) - 1);
	}

	public function add($idHarvesr, $data)
	{
		$this->data[$idHarvesr][$data->animal->typeAnimal][] = [
			'id_animal' => $data->animal->idAnimal,
			'name' => $data->nameProduct,
			'unit' => $data->unitProduct,
			'amount' => $data->amountProduct,
		];
	}

	public function printStatisticsHarvest()
	{
		$amountEggs = 0;
		$amountLiters = 0;

		foreach ($this->data as $currentHarvest) {
			foreach ($currentHarvest as $animalType => $products) {
				foreach ($products as $product) {
					if($animalType === 'Cow'){
						$amountLiters = $amountLiters + (int)$product['amount'];
					}
					if($animalType === 'Chicken'){
						$amountEggs = $amountEggs + (int)$product['amount'];
					}
				}				
			}
		}
		echo 'Количество сборов продуктов: ' . count($this->data) . PHP_EOL;
		echo 'Общее количество собранных яиц: ' . $amountEggs . PHP_EOL;
		echo 'Общее количесвто собранных литров молока: ' . $amountLiters . PHP_EOL;
	}

	private function getCowsRaiting($sort)
	{
		$cows = [];

		foreach ($this->data as $currentHarvest) {
			foreach ($currentHarvest as $animalType => $products) {
				foreach ($products as $product) {
					if($animalType === 'Cow'){
						if(!isset($cows[$product['id_animal']])) {
							$cows[$product['id_animal']] = 0;
						}
						$cows[$product['id_animal']] += $product['amount'];

					}
				}				
			}
		}

		if($sort === SORT_DESC) {
			arsort( $cows );
		} else {
			asort( $cows );			
		}

		return $cows;
	}

	private function printRating($sort = SORT_DESC, $limit = false)
	{
		$i = 1;
		foreach ($this->getCowsRaiting($sort) as $idCow => $amount) {
			echo $i
				. ( ($i === 10)?'. ': '.  ' )
				. 'Номер коровы: ' . $idCow
				. '. Cобрано литров молока: ' . $amount . PHP_EOL;
				if($limit !== false && $i >= $limit) {
					break;
				}
			$i++;
		}
	}

	public function printFullRating()
	{
		echo "Полный рейтинг коров" . PHP_EOL;
		$this->printRating();
	}

	public function printTopRating()
	{
		echo "Первые три коровы" . PHP_EOL;
		$this->printRating(SORT_DESC, 3);
	}

	public function printBottomRating()
	{
		echo "Последние три коровы" . PHP_EOL;
		$this->printRating(SORT_ASC, 3);
	}

}