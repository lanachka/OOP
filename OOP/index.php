<?php

include 'MovableInterfase.php';
include 'Car.php';
include 'Bus.php';
include 'Truck.php';

$bus = new Bus('BMW', 150,null,'2015');

$truck = new Truck('Mercedes', 120,null,'2020');

echo  $bus->start(). PHP_EOL;
echo  $truck->start(). PHP_EOL;
echo  $bus->stop(). PHP_EOL;
echo  $truck->stop(). PHP_EOL;
echo  $bus->up(10). PHP_EOL;
echo  $truck->up(10). PHP_EOL;
echo  $bus->down(10). PHP_EOL;
echo  $truck->down(10). PHP_EOL;