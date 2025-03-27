<?php
require_once 'Car.php';

class CarFactory {
    public static function createCar($db, $marca, $modelo, $tipo, $kilometraje, $precio, $descripcion, $id_vendedor, $id_comprador = null) {
        
        $car = new Car($db);
        
        $car->marca = $marca;
        $car->modelo = $modelo;
        $car->tipo = $tipo;
        $car->kilometraje = $kilometraje;
        $car->precio = $precio;
        $car->descripcion = $descripcion;
        $car->id_vendedor = $id_vendedor;
        $car->id_comprador = $id_comprador;

        return $car;
    }
}
?>
