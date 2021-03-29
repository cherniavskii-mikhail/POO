<?php

require_once 'Classes/Car.php';
require_once 'Classes/Bicycle.php';

/*
* Define constructor param for our audi
*/
$audiColor = 'Blue';
$audiNbSeats = 5;
$audiEnergy = 'High';

/*
* Define constructor param for our bike
*/
$bikeColor = 'Red';


// Instanciate an object from class Car and Bicyle
$audi = new Car($audiColor, $audiNbSeats, $audiEnergy);
$bike = new Bicycle($bikeColor);

/*
* Test audi
*/ 
echo $audi->forward().PHP_EOL;
echo 'Vitesse audi : '. $audi->getCurrentSpeed().PHP_EOL;
echo $audi->brake().PHP_EOL;
echo 'Vitesse audi après arrêt : '. $audi->getCurrentSpeed().PHP_EOL;

/*
* Test bike
*/
echo $bike->forward().PHP_EOL;
echo 'Vitesse vélo : '. $bike->getCurrentSpeed().PHP_EOL;
echo $bike->brake().PHP_EOL;
echo 'Vitesse vélo après arrêt : '. $bike->getCurrentSpeed().PHP_EOL;


