<head>
    <link rel="stylesheet" href="./css/infoCar.css">
</head>

<?php
require_once('./models/cars.php');

$cars = new Cars;

$idCar = $_GET['car'];

$car = $cars->car($idCar);
?>

<?php include('./layout/navbar.php') ?>

<div class="main">
    <div class="container">

        <?php foreach ($car as $iten) : ?>
            
            <div class="image">
                <img src="./uploads/<?php echo $iten['img'] ?>">
            </div>

            <div class="info">
                <table>
                    <tbody>
                        <tr>
                            <td> Marca: </td>
                            <td> <?php echo $iten['marca'] ?> </td>
                        </tr>

                        <tr>
                            <td> Modelo: </td>
                            <td> <?php echo $iten['modelo'] ?> </td>
                        </tr>

                        <tr>
                            <td> Tipo de carroceria: </td>
                            <td> <?php echo $iten['carroceria'] ?> </td>
                        </tr>

                        <tr>
                            <td> Motor: </td>
                            <td> <?php echo $iten['motor'] ?> </td>
                        </tr>

                        <tr>
                            <td> Potencia: </td>
                            <td> <?php echo $iten['potencia'] ?> </td>
                        </tr>

                        <tr>
                            <td> Torque: </td>
                            <td> <?php echo $iten['torque'] ?> </td>
                        </tr>

                        <tr>
                            <td> Peso: </td>
                            <td> <?php echo $iten['peso'] ?> kg </td>
                        </tr>

                        <tr>
                            <td> Tipo do cambio: </td>
                            <td> <?php echo $iten['cambio'] ?> </td>
                        </tr>

                        <tr>
                            <td> 0 a 100km/h: </td>
                            <td> <?php echo $iten['zeroaCem'] ?> </td>
                        </tr>

                        <tr>
                            <td> Velocidade Maxima: </td>
                            <td> <?php echo $iten['velocidadeMax'] ?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php endforeach ?>

    </div>

</div>

<?php include('./layout/footer.php') ?>