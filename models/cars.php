<?php

class Cars
{
    protected $db;

    public function __construct()
    {
        $this->conexao();
    }

    private function conexao()
    {
        $this->db = new mysqli('localhost', 'root' , '', 'cars');
    }

    public function cadastrar($marca,$modelo,$carroceria,$motor,$potencia,$torque,$peso,$cambio,$zeroaCem,$velocidadeMax,$img)
    {
        $stmt = $this->db->prepare(
            "INSERT INTO cars (`Marca`,
                            `Modelo`,
                            `Carroceria`,
                            `Motor`,
                            `Potencia`,
                            `Torque`,
                            `Peso`,
                            `Cambio`,
                            `0a100`,
                            `VelocidadeMax`,
                            `img`) VALUES (?,?,?,?,?,?,?,?,?,?,?)");

        $stmt->bind_param(
            "sssssssssss",$marca,$modelo,$carroceria,$motor,$potencia,$torque,$peso,$cambio,$zeroaCem,$velocidadeMax,$img);

         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function listar()
    {
        $query = $this->db->query(
            'SELECT * FROM cars'
        );

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }

        return $array;
    }

    public function car($id)
    {
        $query = $this->db->query(
            'SELECT * FROM cars WHERE id ='.$id
        );

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }

        return $array;
    }

}
?>