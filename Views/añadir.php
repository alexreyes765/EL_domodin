<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Agregar Carro</title>
    <style>
        /* Estilos del formulario */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
        }
        input[type="text"], input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulario para Agregar un Carro</h1>
        <form action="../acciones/guardar_carro.php" method="POST">
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" name="modelo" required>
            </div>

            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca" required>
            </div>

            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" id="tipo" name="tipo" required>
            </div>

            <div class="form-group">
                <label for="kilometraje">Kilometraje (en km):</label>
                <input type="number" id="kilometraje" name="kilometraje" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio ($):</label>
                <input type="number" id="precio" name="precio" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type="text" id="descripcion" name="descripcion" required>
            </div>

            <div class="form-group">
                <label for="id_comprador">ID Comprador:</label>
                <input type="number" id="id_comprador" name="id_comprador">
            </div>

            <div class="form-group">
                <label for="id_vendedor">ID Vendedor:</label>
                <input type="number" id="id_vendedor" name="id_vendedor" required>
            </div>

            <input type="submit" value="Agregar Carro">
        </form>
    </div>
</body>
</html>

