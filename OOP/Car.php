<?php

namespace OOP;

 abstract class Car implements MovableInterfase
{
    protected $model;
    protected $speedMax;
    protected $currentSpeed;
    protected $year;
    //СВОЙСТВО ДЛЯ КОМПОЗИЦИИ
    protected $vinCode;
    //СВОЙСТВО ДЛЯ АГРЕГАЦИИ
    protected $engine;
    protected static $country;
    public const COUNTRY_GERMANY = 'GERMANY';


    public function __construct(Engine $engine, $model, $speedMax, $currentSpeed, $year)
    {
        $this->engine = $engine;
        $this->model = $model;
        $this->speedMax = $speedMax;
        $this->currentSpeed = $currentSpeed;
        $this->year = $year;
        $this->vinCode = new VinCode();
    }


     public function move($to, $cargo)
     {
         echo 'I am moving to ' . $to . ' with ' . $cargo . PHP_EOL;

     }

     public static function getCountry()
     {
         return self::$country;
     }

     public static function setCountry(string $country)
     {
         self::$country = $country;
     }

     public function start()
     {
         return 'Включаю зажигание';
     }

     public function stop()
     {
         return 'Выключаю зажигание';
     }

     public function up(int $unit)
     {
         if ($this->currentSpeed + $unit > $this->speedMax) {
             $this->currentSpeed = $this->speedMax;
             return "Еду с максимальной  скоростью" . ' ' . $this->speedMax;
         } else {
             $this->currentSpeed += $unit;
             return 'Еду со скоростью' . ' ' . $this->currentSpeed;
         }

     }

     public function down(int $unit)
     {
         if ($this->speedMax - $unit < $this->currentSpeed) {
             $this->currentSpeed = $this->speedMax;
             return "Еду с максимальной  скоростью" . ' ' . $this->speedMax;
         } else {
             $this->speedMax -= $unit;
             return 'Еду со скоростью' . ' ' . $this->speedMax;
         }

     }

}