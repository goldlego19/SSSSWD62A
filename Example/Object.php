<?php
    class Fruit{
        protected $name;
        protected $color;
        // private $weight;
        public function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }
        public function intro(){
            echo "The Fruit is {$this->name} and the color is {$this->color}.";
        }
    }
    class Strawberry extends Fruit{
        protected $weight;
        public function __construct($name,$color,$weight){
            parent::__construct($name,$color);
            $this->weight = $weight;
        }
        public function get_weight(){
            echo "Weight of Strawberry is {$this->weight}";
        }
        public function message(){
            echo "Am i a fruit or a berry? ";
        }
    }
    $strawberry = new Strawberry("Strawberry","Red",10);
    $strawberry->message();
    $strawberry->intro();
    $strawberry->get_weight();

    // $mango = new Fruit();
    // $mango->name = 'Mango';//OK
    // $mango->color = 'Yellow';// ERROR
    // $mango->weight = 300;// ERROR


?>