<?php 

    Class Veiculo {

        public $modelo;
        public $cor;
        private $velocidade = 0;

        function __construct($modelo, $cor) {
           $this -> modelo = $modelo;
            $this -> cor = $cor;
        }

        function get_velocidade() {
            return $this -> velocidade;
        }

        function acelerar($i) {
            echo $this -> modelo . "vrumm";
        }

    }

?>