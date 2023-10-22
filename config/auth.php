<?php
session_start();
// serve para estabelecer ua conexão com o banco
include_once('conexao.php');

/* inicia uma sessão para podemos manipular a variaves de sessão*/


$user = filter_input(INPUT_POST, 'user');
$senha = filter_input(INPUT_POST, 'senha');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');


/* codifica a senha em md5 */
//$senha_cod = md5($senha);

$sql = "SELECT * FROM user WHERE user = '$user' && senha = '$senha'";
var_dump($sql);

$query = mysqli_query($conn, $sql);


/* guarda valores do banco */
$row = mysqli_fetch_assoc($query);

/* conta se teve respota do banco para saber se o login e valido  */
$resposta = mysqli_num_rows($query);

if ($resposta > 0) {
    $_SESSION['id'] = $row['id'];
    $_SESSION['user'] = $row['user'];
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['email'] = $row['email'];

   
    header('Location:../index.php');
} else {

    header("Location:../login.php");
}
