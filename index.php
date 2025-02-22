<?php
require_once 'Model/conexion.php';
require_once 'Controller/CarController.php';

$database = new conexion();
$db = $database->getConn();
$carController = new CarController($db);
$stmt = $carController->readCars();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Domodin</title>
    <link rel="stylesheet" href="Styles/style.css">
</head>
<body>
    <nav>
        <h1>Bienvenidos al Domodin</h1>
        <div class="navegacion">
            <a href="Views/añadir.php">agregar un carro</a>
        </div>
    </nav>
    <div class="container">
        <div class="card">
            <h2>Nissan</h2>
            <figure>
                <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru">
            </figure>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <h4>Descripcion:</h4>
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        </div>

        <div class="card">
            <h2>Nissan</h2>
            <figure>
                <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru">
            </figure>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <h4>Descripcion:</h4>
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        </div>

        <div class="card">
            <h2>Nissan</h2>
            <figure>
                <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru">
            </figure>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <h4>Descripcion:</h4>
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        </div>

        <div class="card">
            <h2>Nissan</h2>
            <figure>
                <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru">
            </figure>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <h4>Descripcion:</h4>
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        </div>

        <div class="card">
            <h2>Nissan</h2>
            <figure>
            <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru">
            </figure>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <h4>Descripcion:</h4>
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        </div>

        <div class="card">
            <h2>Nissan</h2>
            <figure>
                <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru">
            </figure>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <h4>Descripcion:</h4>
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        </div>

        <div class="card">
            <h2>Nissan</h2>
            <figure>
                <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru">
            </figure>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <h4>Descripcion:</h4>
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        </div>

        <div class="card">
            <h2>Nissan</h2>
            <figure>
                <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru">
            </figure>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <h4>Descripcion:</h4>
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        </div>

        <div class="card">
            <h2>Nissan</h2>
            <figure>
                <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru">
            </figure>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <h4>Descripcion:</h4>
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        </div>
    </div>
</body>
</html>