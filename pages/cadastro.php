<head>
    <link rel="stylesheet" href="./css/cadastro.css">
</head>

<?php include('./layout/navbar.php') ?>

<div class="main-register">

    <h2> Registrar veiculo </h2>

    <form action="../controllers/cars.php" method="POST" enctype="multipart/form-data">
        <div>
            <input type="text" name="marca" placeholder="Marca">
            <input type="text" name="modelo" placeholder="Modelo">
        </div>

        <div>
            <input type="text" name="carroceria" placeholder="Carroceria">
            <input type="text" name="motor" placeholder="Motor">
        </div>

        <div>
            <input type="text" name="potencia" placeholder="Potencia">
            <input type="text" name="torque" placeholder="Torque">
        </div>

        <div>
            <input type="text" name="peso" placeholder="Peso">
            <input type="text" name="cambio" placeholder="Cambio">
        </div>

        <div>
            <input type="text" name="zeroaCem" placeholder="0 a 100kmh">
            <input type="text" name="velocidadeMax" placeholder="velocidade maxima">
        </div>

        <div>
            <textarea name="desc"> Descrição </textarea>
        </div>

        <div>
            <input type="file" name="arquivo">
        </div>

        <div>
            <input class="btn" type="submit">
        </div>
    </form>
</div>

<?php include('./layout/footer.php') ?>