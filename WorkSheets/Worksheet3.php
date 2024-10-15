
<?php
class Car{
    public $model;
    public $color;
    public static $wheels;
    protected $price;
    

    //constructer
    public function __construct($model,$color,$price)
    {
        $this->model = $model;
        $this->color = $color;
        $this->price = $price;
        self::$wheels = 4;
    }
    
    //setters
    // public function set_model($model){
    //     $this->model = $model;
    // }
    // public function set_color($color){
    //     $this->color = $color;
    // }
    //getter
    public function get_model(){
        echo "Model: {$this->model}";
    }
    public function get_color(){
        echo "Color: {$this->color}";
    }
    public function get_wheels(){
        return self::$wheels;
    }
    public function toString(){
        echo "The Model of the car is {$this->model}\nThe Color of the car is {$this->color}\nIt has {$this->get_wheels()} wheels\nand it costs {$this->price}\n\n";
    }
}
class ElectricCar extends Car{

    protected $batteryCapacity;
    public function __construct($model,$color,$price,$batteryCapacity){
        parent::__construct($model,$color,$price);
        $this->batteryCapacity = $batteryCapacity;
    }
    public static function question(){
        echo "Am i a real car?\n";
    }
    public function toString(){
        echo "The Model of the car is {$this->model}\nThe Color of the car is {$this->color}\nIt has {$this->get_wheels()} wheels\nThe battery Capacity is {$this->batteryCapacity}kWh\n and it costs {$this->price}\n\n";
    }
}

$car1 = new Car("Ferrari","Red",0);
$car2 = new Car("Lamborghini","Yellow",0);

$car3 = new Car("Porsche","Black",90000);

$car3->toString();
$electricCar = new ElectricCar("Tesla","White",120000,50);
$electricCar->toString();
$electricCar->question();

?>