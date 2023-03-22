<?php
class Database {
    
    private $host = 'localhost';
    private $db = 'f2i';
    private $user = 'root';
    private $password = '';
    private $port = 3306;

    public function connectDb() {
        try {
            $pdo = new PDO(
                'mysql:host='.
                $this->host
                .';port='.
                $this->port
                .';dbname='.
                $this->db
                .'', 
                $this->user, 
                $this->password);
            $pdo->exec("SET CHARACTER SET utf8");
            return $pdo;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    } 

    // select function pdo object, recherche, table et le filtre where 
    public function select($pdo, $search, $table, $where) {
        // requete sql
        $sql = "SELECT ".$search." FROM ".$table."";
        // init array
        $array = [];
        // si le tableau est superieur a 1
        if (count($where) > 1) {
            // le where egale au résultat
            $sql = $sql."WHERE ".$where[0]."= ?";
            // la valeur dans le tableau pour execute
            $array = [$where[1]];
        }
        // je prépare ma requete sql pour eviter les injection sql
        $statement = $pdo->prepare($sql);
        // j'execute ma requete sql avec les valeurs
        $statement->execute($array);
        return $statement;
    }
    
    public function insert($pdo, $champs, $table, $array, $pi){
        try {
            $sql = "INSERT INTO ";
            $sql = $sql.$table."(".$champs.") VALUES ".$pi;
            $statement = $pdo->prepare($sql);
            $statement->execute($array);
            return $statement;
        } catch (Exception $e) {
            return true;
        }
    }
}
?>