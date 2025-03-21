<?php

    include_once ("Veiculo.php");
    $veiculoFerrariVermelha = new Veiculo ("ferrari", "vermelha", 100);
    $harleyDavidson = new Veiculo ("Harley", "Chrome");
    $fuscaAzul = new Carro ("Fusca", "Azul", 30);
    $fuscaPreto = new Carro ("Fusca", "Preto", 50);

    var_dump($veiculoFerrariVermelha);

    echo "<span> Ferrari Vel: " . $veiculoFerrariVermelha -> get_velocidade() . "</span";
    echo "<span> Fusca Azul Vel: " . $fuscaAzul -> get_velocidade() . "</span>";
    echo "<span> Fusca Preto Vel: " . $fuscaPreto -> get_velocidade() . "</span>";

    $veiculoFerrariVermelha -> acelerar (10);
    $fuscaAzul -> acelerar (10);
    $fuscaPreto -> acelerar (10);

?>          