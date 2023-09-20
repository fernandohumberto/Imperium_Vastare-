<?php


//Conexao com o banco
$servername = 'localhost';
$username = 'root';
$password ='';
$db = 'imperium';

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// retorna verdadeiro ou falso

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$conn->set_charset("utf8");

//echo "Connected successfully";
// Fim Conexao com o banco

mysqli_select_db($conn,$db);