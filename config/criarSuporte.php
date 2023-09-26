<?php
// Serve para estabelecer uma conexão com o banco
include_once('conexao.php');

/* Inicia uma sessão para podermos manipular as variáveis de sessão*/

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$message = filter_input(INPUT_POST, 'message');
$idUser = filter_input(INPUT_POST, 'idUser');

$sql = "INSERT INTO `suporte`(`nome`, `email`, `message`, `idUser`) VALUES
 ('$nome','$email','$message','$idUser')";

$query = mysqli_query($conn, $sql);

if ($query) {
    header('Location:../suporte.php?m=1');
} else {
    echo 'deu merda';
}