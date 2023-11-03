<?php
session_start();

include_once('conexao.php');

$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_FLOAT);
$despesa = filter_input(INPUT_POST, 'despesa', FILTER_SANITIZE_STRING);
$idUser = filter_input(INPUT_POST, 'idUser', FILTER_SANITIZE_NUMBER_INT);
$data = filter_input(INPUT_POST, 'data');
var_dump($data);

if ($valor !== false && $despesa !== false && $idUser !== false ) {
    $sql = "INSERT INTO `meusgastos` (`despesa`, `valor`, `idUser`, `data`) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Correção aqui: use "s" para a data
        mysqli_stmt_bind_param($stmt, "sdis", $despesa, $valor, $idUser, $data);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            header('Location: ../meusgastos.php?status=1');
            exit;
        } else {
            echo 'Erro ao executar a consulta SQL: ' . mysqli_error($conn);
        }
    } else {
        echo 'Erro na preparação da consulta SQL: ' . mysqli_error($conn);
    }
} else {
    echo 'Dados de entrada inválidos.';
}
?>
