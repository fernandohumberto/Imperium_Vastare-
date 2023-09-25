<?php
include_once('conexao.php');


$recuperacao = filter_input(INPUT_POST, 'recuperacao');

$sql = "SELECT * FROM user WHERE email = '" . $recuperacao . "' ";
$query = mysqli_query($conn, $sql);

/* verificar se email existe no bd */
$resposta = mysqli_num_rows($query);

var_dump($resposta);

if ($resposta > 0) {

    $atualizarRecuperacao = "UPDATE `user` SET `recuperacao`='1' WHERE email =".$recuperacao." ";

    header('Location:../senha.php');
} else {
    echo "erro";
}
