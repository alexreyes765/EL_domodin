<?php
require_once '../Model/Car.php';

class CarController {

    private $car;

    public function __construct($db) {
        $this->car = new Car($db);
    }

    public function createCar($modelo, $marca, $tipo, $kilometraje, $precio, $descripcion, $id_vendedor) {
        $this->car->modelo = $modelo;
        $this->car->marca = $marca;
        $this->car->tipo = $tipo;
        $this->car->kilometraje = $kilometraje;
        $this->car->precio = $precio;
        $this->car->descripcion = $descripcion;
        $this->car->id_vendedor = $id_vendedor;

        if ($this->car->create()) {
            echo "Car created successfully!";
        } else {
            echo "Unable to create car.";
        }
    }

    public function readCars() {
        return $this->car->read();
    }

    public function readCar($id_carro) {
        $this->car->id_carro = $id_carro;
        $this->car->readOne();
    }

    public function updateCar($id_carro, $modelo, $marca, $tipo, $kilometraje, $precio, $descripcion, $id_vendedor, $id_comprador = null) {
        $this->car->id_carro = $id_carro;
        $this->car->modelo = $modelo;
        $this->car->marca = $marca;
        $this->car->tipo = $tipo;
        $this->car->kilometraje = $kilometraje;
        $this->car->precio = $precio;
        $this->car->descripcion = $descripcion;
        $this->car->id_vendedor = $id_vendedor;
        $this->car->id_comprador = $id_comprador;  // Si hay comprador, se actualiza, si no, queda como null

        if ($this->car->update()) {
            echo "Car updated successfully!";
        } else {
            echo "Unable to update car.";
        }
    }

    public function deleteCar($id_carro) {
        $this->car->id_carro = $id_carro;

        if ($this->car->delete()) {
            echo "Car deleted successfully!";
        } else {
            echo "Unable to delete car.";
        }
    }
}
?>
