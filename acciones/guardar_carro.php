<?php
// Incluir la clase de conexión y controlador
require_once __DIR__ . '/../Model/CarFactory.php';
require_once __DIR__ . '/../Controller/carController.php';
require_once __DIR__ . '/../Model/conexion.php';

// Crear una conexión a la base de datos
$database = new conexion();
$db = $database->getConn();

// Crear una instancia del controlador de carros
$carController = new CarController($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $tipo = $_POST['tipo'];
    $kilometraje = $_POST['kilometraje'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $id_comprador = isset($_POST['id_comprador']) ? $_POST['id_comprador'] : null; // El id_comprador puede ser null
    $id_vendedor = $_POST['id_vendedor'];

    if (empty($modelo) || empty($marca) || empty($tipo) || empty($kilometraje) || empty($precio) || empty($descripcion) || empty($id_vendedor)) {
        echo "<script>alert('Todos los campos son obligatorios.'); window.location.href='formulario_agregar_carro.php';</script>";
        exit;
    }

    $carController->createCar($modelo, $marca, $tipo, $kilometraje, $precio, $descripcion, $id_vendedor);

    echo "<script>alert('Carro agregado exitosamente!'); window.location.href='listar_carros.php';</script>";
}
?>