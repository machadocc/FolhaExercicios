<?php
$pastas = array(
    "bsn" => array(
        "3a Fase" => array(
            "desenvWeb", 
            "bancoDados 1", 
            "engSoft 1"
        ),
        "4a Fase" => array(
            "Intro Web", 
            "bancoDados 2", 
            "engSoft 2"
        )
    )
);

function imprimirArvore($pastas, $nivel = 0) {
    foreach ($pastas as $chave => $valor) {
        echo str_repeat("-", $nivel) . " " . $chave . "<br>";

        if (is_array($valor)) {
            imprimirArvore($valor, $nivel + 1);
        } else {
            echo str_repeat("-", $nivel + 1) . " " . $valor . "<br>";
        }
    }
}

imprimirArvore($pastas);
?>
