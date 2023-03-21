<?php 
    class Verification{
        private $array = [];

        private function verification($name,$min,$max,$message){
       
            if(strlen($name) < $min || strlen($name) > $max){
            
                array_push( $array,$message);
            }
            return $this->array;
        }
        public function Email($name){
            
            $this->verification($name,5,255,'invalid');
        }

        public function getIndexError($index){
            if(count($this->array)>0){

                return $this->array[$index];
            }
            return null;
        }

        public function getArray(){
            return $this->array;
        }
        public function setArray(){
            return $this->array = $array;
        }
    }
?>