<?php
    class Database {
        private $host = 'localhost';
        private $db = 'f2i_php';
        private $user = 'root';
        private $pwd = '';
        private $port = 3306;
    

        public function connectDb(){
            try{
                $pdo = new PDO('mysql:host='.$this->host.';
                                      port='.$this->port.';
                                      dbname='.$this->db.'',$this->user, $this->pwd);
                    $pdo->exec("SET CHARACTER SET utf8");
                    return $pdo;
                }catch(Exception $e){
                    return $e->getMessage();
                }
        }
    }


?>