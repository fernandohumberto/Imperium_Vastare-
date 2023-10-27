<?php

session_start();

include_once('conexao.php');

$id = filter_input(INPUT_GET, 'id');

// 1 ativo - 0 "desligado"//

// query que faz o update
$sql = "UPDATE `meusgastos` SET `deletado`=0 WHERE id =" . $id . " ";

// faz a interação com banco
$query = mysqli_query($conn, $sql);


if ($query == true) {


    header('Location:../meusgastos.php');
} else {
    echo 'error';
}
