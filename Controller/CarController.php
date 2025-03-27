<?php
require_once __DIR__ . '/../Model/CarFactory.php';

class CarController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createCar($modelo, $marca, $tipo, $kilometraje, $precio, $descripcion, $id_vendedor) {
        $car = CarFactory::createCar($this->db, $modelo, $marca, $tipo, $kilometraje, $precio, $descripcion, $id_vendedor);

        if ($car->create()) {
            echo "Car created successfully!";
        } else {
            echo "Unable to create car.";
        }
    }

    public function readCars() {
        $car = new Car($this->db);
        return $car->read();
    }

    public function readCar($id_carro) {
        $car = new Car($this->db);
        $car->id_carro = $id_carro;
        return $car->readOne();
    }

    public function updateCar($id_carro, $modelo, $marca, $tipo, $kilometraje, $precio, $descripcion, $id_vendedor, $id_comprador = null) {
        $car = CarFactory::createCar($this->db, $modelo, $marca, $tipo, $kilometraje, $precio, $descripcion, $id_vendedor, $id_comprador);
        $car->id_carro = $id_carro;

        if ($car->update()) {
            echo "Car updated successfully!";
        } else {
            echo "Unable to update car.";
        }
    }

    public function deleteCar($id_carro) {
        $car = new Car($this->db);
        $car->id_carro = $id_carro;

        if ($car->delete()) {
            echo "Car deleted successfully!";
        } else {
            echo "Unable to delete car.";
        }
    }
}
?>