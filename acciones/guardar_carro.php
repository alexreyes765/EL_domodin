<?php
// Incluir la clase de conexión y controlador
require_once '../Model/Car.php';
require_once '../Controller/carController.php';
require_once '../Model/conexion.php';

// Crear una conexión a la base de datos
$database = new conexion();
$db = $database->getConn();

// Crear una instancia del controlador de carros
$carController = new CarController($db);

// Verificar si la solicitud es POST (cuando se envía el formulario)
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

    // Llamar al método createCar del controlador para agregar el carro
    $carController->createCar($modelo, $marca, $tipo, $kilometraje, $precio, $descripcion, $id_vendedor);

    // Redirigir a otra página o mostrar un mensaje de éxito
    echo "<script>alert('Carro agregado exitosamente!'); window.location.href='listar_carros.php';</script>";
}
?>
