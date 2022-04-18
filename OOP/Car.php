<?php
//include 'MovableInterfase.php';


 abstract class Car implements MovableInterfase
{
    protected $model;
    protected $speedMax;
    protected $currentSpeed;
    //protected $unit;
    protected $year;
    public static $country;
    public const COUNTRY_GERMANY = 'GERMANY';


    public function __construct($model,$speedMax,$currentSpeed,$year)
    {
        $this->model = $model;
        $this->speedMax = $speedMax;
        $this->currentSpeed = $currentSpeed;
        $this->year = $year;

    }

     public static function getCountry()
    {
        return self::$country;
    }

    public static function setCountry($country)
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
         if($this->currentSpeed + $unit > $this->speedMax){
             $this->currentSpeed = $this->speedMax;
             return "Еду с максимальной  скоростью" . ' ' .$this->speedMax;
         }else{
             $this->currentSpeed +=$unit;
             return 'Еду со скоростью' . ' ' . $this->currentSpeed;
         }

     }

     public function down(int $unit)
     {
         if($this->currentSpeed - $unit > $this->speedMax){
             $this->currentSpeed = $this->speedMax;
             return "Еду с максимальной  скоростью" . ' ' .$this->speedMax;
         }else{
             $this->currentSpeed -=$unit;
             return 'Еду со скоростью' . ' ' . $this->currentSpeed;
         }
     }





}