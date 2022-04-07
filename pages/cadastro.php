<head>
    <link rel="stylesheet" href="./css/cadastro.css">
</head>

<?php include('./layout/navbar.php') ?>

<div class="main-register">

    <h2>
        Registrar veiculo
    </h2>

    <form action="../controllers/cars.php" method="POST" enctype="multipart/form-data">
        <div>
            <input type="text" name="marca" placeholder="Marca" required>
            <input type="text" name="modelo" placeholder="Modelo" required>
        </div>

        <div>
            <input type="text" name="carroceria" placeholder="Carroceria" required>
            <input type="text" name="motor" placeholder="Motor" required>
        </div>

        <div>
            <input type="text" name="potencia" placeholder="Potencia" required>
            <input type="text" name="torque" placeholder="Torque" required>
        </div>

        <div>
            <input type="text" name="peso" placeholder="Peso" required>
            <input type="text" name="cambio" placeholder="Cambio" required>
        </div>

        <div>
            <input type="text" name="0a100" placeholder="0 a 100kmh" required>
            <input type="text" name="velocidadeMax" placeholder="velocidade maxima" required>
        </div>

        <div>
            <input type="file" name="arquivo" required>
        </div>

        <div>
            <input class="btn" name="register" type="submit">
        </div>
    </form>
</div>

<?php include('./layout/footer.php') ?>