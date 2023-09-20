<?php
// serve para estabelecer ua conexão com o banco
include_once('../config/conexao.php');

/* inicia uma sessão para podemos manipular a variaves de sessão*/


$user = filter_input(INPUT_POST, 'user');
$senha = filter_input(INPUT_POST, 'senha');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');


$sql = "INSERT INTO `user`(`user`, `senha`, `nome`, `email`) VALUES
 ('$user','$senha','$nome','$email') ";

$sqlConnect = mysqli_query($conn, $sql);


if($sqlConnect) {
    header("Location: ../index.php?status=1 ");
}
else {
    header("Location: ../index.php?erro=1 ");
}
  