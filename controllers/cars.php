<?php

require_once('../models/cars.php');
require_once('../lib/utils.php');

class carsController
{
    private $cars;
    private $util;

    public function __construct()
    {
        $this->cars = new Cars();
        $this->util = new Util();
        $this->incluir();
    }

    private function incluir()
    {
        $marca = ($_POST['marca']);
        $modelo = ($_POST['modelo']);
        $carroceria = ($_POST['carroceria']);
        $motor = ($_POST['motor']);
        $potencia = ($_POST['potencia']);
        $torque = ($_POST['torque']);
        $peso = ($_POST['peso']);
        $cambio = ($_POST['cambio']);
        $zeroaCem = ($_POST['zeroaCem']);
        $velocidadeMax = ($_POST['velocidadeMax']);
        $desc = ($_POST['desc']);

        if(isset($_FILES['arquivo'])) {

            $extencao = strtolower(substr($_FILES['arquivo']['name'], -4));
            $novo_nome = md5(time()) . $extencao;

            $diretorio = '../uploads/';

            move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

            
        }

        $this->cars->cadastrar($marca,$modelo,$carroceria,$motor,$potencia,$torque,$peso,$cambio,$zeroaCem,$velocidadeMax,$novo_nome,$desc);

        $this->util::redirect('home');
        
    }
}

new carsController();