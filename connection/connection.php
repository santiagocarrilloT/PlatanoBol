<?php 

class Connection{
    protected $dbh;

    protected function conexion(){
        try {
            $conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=football_stast", "root", "");
            return $conectar;
        } catch (Exception $e) {
            print "¡Error BD!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function set_Names (){
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}
?>