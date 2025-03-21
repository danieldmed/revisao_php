<?php 

    include_once("Veiculo.php");
    class Carro extends Veiculo {

        private $potencia;

        function __construct($modelo, $cor, $potencia) {
            parent::__construct ($modelo, $cor);
            $this -> potencia = $potencia;
        }

        function acelerar ($i) {
            echo $this -> modelo . "vrumm" . "*" . $this -> potencia + "<br>";
        }
    }

?>