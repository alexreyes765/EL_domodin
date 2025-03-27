<?php
class Car {
    private $conn;
    private $table_name = "carros";

    public $id_carro;
    public $modelo;
    public $marca;
    public $tipo;
    public $kilometraje;
    public $precio;
    public $descripcion;
    public $id_comprador = null;
    public $id_vendedor;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Crear un nuevo carro
    public function create() {
        // Se añade id_comprador al query, aunque sea null inicialmente
        $query = "INSERT INTO " . $this->table_name . " SET marca=:marca, modelo=:modelo, tipo=:tipo, kilometraje=:kilometraje, precio=:precio, descripcion=:descripcion, id_vendedor=:id_vendedor, id_comprador=:id_comprador";

        $stmt = $this->conn->prepare($query);

        // Limpieza de los datos
        $this->id_carro = htmlspecialchars(strip_tags($this->id_carro));
        $this->modelo = htmlspecialchars(strip_tags($this->modelo));
        $this->marca = htmlspecialchars(strip_tags($this->marca));
        $this->tipo = htmlspecialchars(strip_tags($this->tipo));
        $this->kilometraje = htmlspecialchars(strip_tags($this->kilometraje));
        $this->precio = htmlspecialchars(strip_tags($this->precio));
        $this->descripcion = htmlspecialchars(strip_tags($this->descripcion));
        $this->id_comprador = htmlspecialchars(strip_tags($this->id_comprador)); // Asegurarse de que este valor es válido (puede ser nulo)
        $this->id_vendedor = htmlspecialchars(strip_tags($this->id_vendedor));

        // Bind de los parámetros
        $stmt->bindParam(":marca", $this->marca);
        $stmt->bindParam(":modelo", $this->modelo);
        $stmt->bindParam(":tipo", $this->tipo);
        $stmt->bindParam(":kilometraje", $this->kilometraje);
        $stmt->bindParam(":precio", $this->precio);
        $stmt->bindParam(":descripcion", $this->descripcion);
        $stmt->bindParam(":id_vendedor", $this->id_vendedor);
        $stmt->bindParam(":id_comprador", $this->id_comprador);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Leer todos los carros
    public function read() {
        $query = "SELECT * FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    // Eliminar un carro
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_carro = :id_carro";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id_carro", $this->id_carro);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET 
            marca = :marca,
            modelo = :modelo,
            tipo = :tipo,
            kilometraje = :kilometraje,
            precio = :precio,
            descripcion = :descripcion,
            id_comprador = :id_comprador
            WHERE id_carro = :id_carro AND id_vendedor = :id_vendedor";
    
        $stmt = $this->conn->prepare($query);
    
        // Sanitización de datos
        $this->id_carro = htmlspecialchars(strip_tags($this->id_carro));
        $this->modelo = htmlspecialchars(strip_tags($this->modelo));
        $this->marca = htmlspecialchars(strip_tags($this->marca));
        $this->tipo = htmlspecialchars(strip_tags($this->tipo));
        $this->kilometraje = htmlspecialchars(strip_tags($this->kilometraje));
        $this->precio = htmlspecialchars(strip_tags($this->precio));
        $this->descripcion = htmlspecialchars(strip_tags($this->descripcion));
        $this->id_vendedor = htmlspecialchars(strip_tags($this->id_vendedor));
        $this->id_comprador = htmlspecialchars(strip_tags($this->id_comprador));
    
        // Vinculación de parámetros
        $stmt->bindParam(":id_carro", $this->id_carro);
        $stmt->bindParam(":modelo", $this->modelo);
        $stmt->bindParam(":marca", $this->marca);
        $stmt->bindParam(":tipo", $this->tipo);
        $stmt->bindParam(":kilometraje", $this->kilometraje);
        $stmt->bindParam(":precio", $this->precio);
        $stmt->bindParam(":descripcion", $this->descripcion);
        $stmt->bindParam(":id_comprador", $this->id_comprador);
        $stmt->bindParam(":id_vendedor", $this->id_vendedor); // Se asegura que el vendedor sea el mismo
    
        return $stmt->execute();
    }
    
}
?>
