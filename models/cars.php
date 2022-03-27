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

    public function cadastrar($marca,$modelo,$carroceria,$motor,$potencia,$torque,$peso,$cambio,$zeroaCem,$velocidadeMax,$img,$desc)
    {
        $stmt = $this->db->prepare(
            "INSERT INTO cars (`marca`, `modelo`, `carroceria`, `motor`, `potencia`, `torque`, `peso`, `cambio`, `zeroaCem`, `velocidadeMax`, `img`, `descricao`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param(
            "ssssssssssss",$marca,$modelo,$carroceria,$motor,$potencia,$torque,$peso,$cambio,$zeroaCem,$velocidadeMax,$img,$desc);

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