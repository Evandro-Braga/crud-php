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
                            <td>
                                Marca:
                            </td>
                            <td>
                                <?php echo $iten['Marca'] ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Modelo:
                            </td>
                            <td>
                                <?php echo $iten['Modelo'] ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Tipo de carroceria:
                            </td>
                            <td>
                                <?php echo $iten['Carroceria'] ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Motor:
                            </td>
                            <td>
                                <?php echo $iten['Motor'] ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Potencia:

                            </td>
                            <td>
                                <?php echo $iten['Potencia'] ?> cv
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Torque:

                            </td>
                            <td>
                                <?php echo $iten['Torque'] ?> kgfm
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Peso:

                            </td>
                            <td>
                                <?php echo $iten['Peso'] ?> kg
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Tipo do cambio:

                            </td>
                            <td>
                                <?php echo $iten['Cambio'] ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                0 a 100km/h:

                            </td>
                            <td>
                                <?php echo $iten['0a100'] ?> sec
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Velocidade Maxima:

                            </td>
                            <td>
                                <?php echo $iten['VelocidadeMax'] ?> km/h
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php endforeach ?>

    </div>

</div>

<?php include('./layout/footer.php') ?>