<?php
session_start();

include_once('conexao.php');

$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_FLOAT);
$despesa = filter_input(INPUT_POST, 'despesa', FILTER_SANITIZE_STRING);
$idUser = filter_input(INPUT_POST, 'idUser', FILTER_SANITIZE_NUMBER_INT);

if ($valor !== false && $despesa !== false && $idUser !== false) {
    $sql = "INSERT INTO `meusgastos` (`despesa`, `valor`, `idUser`) VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sdi", $despesa, $valor, $idUser);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            header('Location: ../meusgastos.php');
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
