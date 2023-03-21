<?php
  
    // echo 'nom : '.$_GET['nom'].'<br/>';
    // echo 'prenom : '.$_GET['prenom'].'<br/>';
    // echo 'email : '.$_GET['email'].'<br/>';

    $array = [];
    function Verif($name,$min,$max,$message,$array){
       
       
        if(strlen($name)< $min || strlen($name)> $max){
        
            array_push( $array,$message);
        }
        // return $array;
        return $array;
    }

 Verif($_GET['nom'],3,4,'bienn',$array);
 var_dump($array);



?>