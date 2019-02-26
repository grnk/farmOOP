<?php

include 'AbstractAnimal.php';
include 'AnimalAgregator.php';
include 'Product.php';
include 'Chicken.php';
include 'Cow.php';

$animalAgregator = new AnimalAgregator();

$animalAgregator->createAnimal('Cow');
$animalAgregator->createAnimal('Chicken');

var_dump($animalAgregator->animals);

// $chicken = new Chicken();
// $cow = new Cow();

// var_dump($chicken, $cow);
// var_dump( $cow->getProduct() );
// var_dump( $chicken->getProduct() );