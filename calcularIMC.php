<?php

if (
    isset($_POST["nome"]) &&
    isset($_POST["dataNasc"]) &&
    isset($_POST["altura"]) &&
    isset($_POST["peso"]) &&
    isset($_POST["genero"])
) {
    $nome = ucfirst($_POST["nome"]);
    $dataNasc = $_POST["dataNasc"];
    $genero = $_POST["genero"];
    $dataNascDate = new DateTime($dataNasc);
    $dataAtual = new DateTime();
    $idade = $dataNascDate->diff($dataAtual)->y;
    $altura =  $_POST["altura"];
    $peso = $_POST["peso"];

    $resultado = "";

    $imc = $peso / (pow($altura, 2));

    if ($genero == 'masculino') {
        $sr = "Sr.";
    } else if ($genero == 'feminino') {
        $sr = "Sra.";
    }

    if ($imc < 18.5) {
        $resultado = "Abaixo do Peso";
    } else if ($imc >= 18.5 && $imc < 25) {
        $resultado = "Peso Normal";
    } else if ($imc >= 25 && $imc < 30) {
        $resultado = "Obesidade 1";
    } else if ($imc >= 30) {
        $resultado = "Obesidade 2";
    }

    echo "$sr $nome pesa " . number_format($peso, 2) . " kg<br>";
    echo "Com $idade anos de idade <br>";
    echo "E " . number_format($altura, 2) . "m de altura <br>";
    echo "Tem " . number_format($imc, 2) . " de Índice de Massa Corporal <br>";
    echo "Portanto ele é esta $resultado";
} else {
    echo "Os dados não foram fornecidos corretamente";
}
