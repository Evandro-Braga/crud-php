<head>
    <link rel="stylesheet" href="./css/index.css">
</head>

<?php
require_once('./models/cars.php');

$cars = new Cars;

$lista = $cars->listar();
?>

<div class="main">
    <?php include('./layout/navbar.php'); ?>

    <div class="image-container">
        <div class="banner">
            <p> InfoSuperCars - Veja a Ficha Tecnica dos supercarros! </p>
        </div>
    </div>

    <div class="card-container">

        <?php foreach ($lista as $iten) : ?>

            <a href="infocar?car=<?php echo $iten['id'] ?>">
                <div class="card">

                    <img src="./uploads/<?php echo $iten['img'] ?>">

                    <div class="card-info">
                        <h4><b> <?php echo $iten['modelo'] ?> </b></h4>
                        <p> <?php echo $iten['descricao'] ?> </p>
                    </div>

                </div>
            </a>

        <?php endforeach ?>
    </div>



    <?php include('./layout/footer.php') ?>
</div>