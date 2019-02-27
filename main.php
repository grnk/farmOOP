<?php

include 'AbstractAnimal.php';
include 'AnimalAgregator.php';
include 'Product.php';
include 'Chicken.php';
include 'Cow.php';
include 'Farm.php';
include 'Statistics.php';

$farm = new Farm();

//Колчество сборов
$farm->harvestProduct();
$farm->harvestProduct();
$farm->harvestProduct();
$farm->harvestProduct();

$farm->getStatistics()->printStatisticsHarvest();
echo PHP_EOL;
$farm->getStatistics()->printFullRating();
echo PHP_EOL;
$farm->getStatistics()->printTopRating();
echo PHP_EOL;
$farm->getStatistics()->printBottomRating();
