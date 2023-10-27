<?php
// serve para estabelecer ua conexão com o banco
include_once('../config/conexao.php');

/* inicia uma sessão para podemos manipular a variaves de sessão*/


$id = filter_input(INPUT_POST, 'id');
$user = filter_input(INPUT_POST, 'user');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');


$sql = "UPDATE `user` SET `user`='$user',`nome`='$nome',`email`='$email' WHERE id = $id ";

var_dump($sql);


$sqlConnect = mysqli_query($conn, $sql);


if ($sqlConnect) {
    header("Location: ../meuperfil.php?status=1 ");
} else {
    header("Location: ../index.php?erro=1 ");
}
