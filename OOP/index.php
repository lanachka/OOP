<?php

include 'MovableInterfase.php';
include 'Car.php';
include 'Bus.php';
include 'Truck.php';

$bus = new Bus('BMW', 150,null,'2015' );

$truck = new Truck('Mercedes',120,null,'2020');

// вывод страны через константу

Car::setCountry(Car::COUNTRY_GERMANY);
echo Car::getCountry(). PHP_EOL;
echo Truck::getCountry().PHP_EOL;
echo Bus::getCountry(). PHP_EOL;


echo $bus->speed(). PHP_EOL;
echo $truck->speed(). PHP_EOL;
echo  $bus->start(). PHP_EOL;
echo  $truck->start(). PHP_EOL;
echo  $bus->stop(). PHP_EOL;
echo  $truck->stop(). PHP_EOL;
echo  $bus->up(160). PHP_EOL;
echo  $truck->up(). PHP_EOL;
echo  $bus->down(). PHP_EOL;
echo  $truck->down(). PHP_EOL;