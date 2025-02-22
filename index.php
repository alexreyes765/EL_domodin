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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="d-flex p-5 justify-content-between align-items-center mb-4 shadow-lg">
        <h1>El Domodin de Carros</h1>
        <div class="navegacion btn btn-success">
            <a href="Views/add.php" style="color: white; text-decoration: none;">Agregar un Carro</a>
            <a href="#" style="color: white; text-decoration: none;">Edita carro</a>
        </div>
    </nav>
    <div class="container">
        <div class="shadow p-3">
            <figure>
                <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru" width="320">
            </figure>
            <h2>Nissan</h2>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        <div class="text-center mt-3">
            <button class="btn btn-primary">Obtener más información</button>
        </div>
    

        </div>

        <div class="shadow-5 p-3">
            <figure>
                <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru" width="300">
            </figure>
            <h2>Nissan</h2>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        </div>

        <div class="shadow-5 p-3">
            <figure>
                <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru" width="300">
            </figure>
            <h2>Nissan</h2>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        </div>

        <div class="shadow-5 p-3">
            <figure>
                <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru" width="320">
            </figure>
            <h2>Nissan</h2>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        </div>

        <div class="shadow-5 p-3">
            <figure>
                <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru" width="320">
            </figure>
            <h2>Nissan</h2>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        </div>

        <div class="shadow-5 p-3">
            <figure>
                <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru" width="320">
            </figure>
            <h2>Nissan</h2>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        </div>

        <div class="shadow-5 p-3">
            <figure>
                <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru" width="320">
            </figure>
            <h2>Nissan</h2>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        </div>

        <div class="shadow-5 p-3">
            <figure>
                <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru" width="320">
            </figure>
            <h2>Nissan</h2>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        </div>

        <div class="shadow-5 p-3">
            <figure>
                <img src="https://imgs.search.brave.com/9yGQDmKV_uUw9f3CONlBH9KLV9z6w8jDo_tOfIrhDZM/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/cmVtZWRpb3NkaWdp/dGFsZXMuY29tL2Jl/MzA1Yi8xMzY2XzIw/MDAtMS80NTBfMTAw/MC5qcGVn" alt="Nissan Tsuru" width="320">
            </figure>
            <h2>Nissan</h2>
            <div class="content">
                <p>Modelo: Tsuru</p>
                <p>Tipo: Sedan</p>
                <p>Kilometraje: 100000km</p>
                <p>Precio: $500000mxn</p>
            </div>
            <div class="description">
                <p>clima heladote, era de una maestra, sale a carretera sin problemas</p>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
</body>
</html>