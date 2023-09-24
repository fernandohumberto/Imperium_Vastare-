<?php

session_start();
// serve para estabelecer ua conexão com o banco
include_once('../config/conexao.php');

unset($_SESSION['id']);
session_destroy();
header("Location: ../login.php");

?>