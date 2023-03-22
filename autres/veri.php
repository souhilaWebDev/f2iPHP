<?php 
    class Verification{

        private $name;
        private $min;
        private $max;
        private $message;
        private $array;

        function __construct() {
            $this->name = $name;
            $this->min = $min;
            $this->max = $max;
            $this->message = $message;
            $this->array = $array;
        }
       
        function virif() {
            if(strlen($this->name)< $this->min || strlen($this->name)> $this->max){
        
                array_push( $this->array,$this->message);
            }
            return $array;
        }
       
    }
    $virifObj = new Verification();
    var_dump($virif);
    $apple = new Fruit("Apple", "red");
echo $apple->get_name();
?>
