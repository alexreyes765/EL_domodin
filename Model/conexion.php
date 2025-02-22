<?php
#Inicializar la conexion a la base de datos
class conexion{
    
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'db_domodin';
    public $conn;

    public function getConn(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->password);
        }
        catch(Execption $error){
            echo 'Error al conectarse a la base de datos' .$error->getMessage();
            die(); #Captura el tipo de error
        }

        return $this->conn;
    }
   
}
?>