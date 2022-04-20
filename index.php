<?php

use OOP\Car;
use OOP\Truck;
use OOP\Bus;
use OOP\Driver;
use OOP\Engine;

function autoLoad($className){
    //ДЛЯ ЗАМЕНЫ СЛЕША В ДРУГУЮ СТОРОНУ
    $formatClassName = str_replace('\\','/',$className);
    $fileName = __DIR__ . '/' . $formatClassName . '.php';
    echo $fileName. PHP_EOL;
    if(file_exists($fileName)){
        include $fileName;
    }
}

spl_autoload_register('autoLoad');

$engine = new Engine();
$bus = new Bus($engine,'BMW', 150, null, '2015');
$truck = new Truck($engine,'Mercedes', 120, null, '2020');

Car::setCountry(Car::COUNTRY_GERMANY);
echo Car::getCountry(). PHP_EOL;
echo Truck::getCountry(). PHP_EOL;
echo Bus::getCountry(). PHP_EOL;

echo  $bus->start(). PHP_EOL;
echo  $truck->start(). PHP_EOL;
echo  $bus->stop(). PHP_EOL;
echo  $truck->stop(). PHP_EOL;
echo  $bus->up(100). PHP_EOL;
echo  $truck->up(100). PHP_EOL;
echo $bus->down(100). PHP_EOL;
echo  $truck->down(100). PHP_EOL;