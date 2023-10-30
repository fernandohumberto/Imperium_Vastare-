<?php
// Conexão com o banco de dados


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "imperium";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mes_selecionado = $_POST['mes'];
    
    $ano_selecionado = date('Y', strtotime($mes_selecionado));
    $mes_selecionado = date('m', strtotime($mes_selecionado));

    $sql = "SELECT * FROM meusgastos WHERE YEAR(data) = $ano_selecionado AND MONTH(data) = $mes_selecionado";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table table-striped table-responsive'><tr class="."table-primary"."><th>ID</th><th>Despesa</th><th>Valor</th><th>Data</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["despesa"] . "</td><td>" . $row["valor"] . "</td><td>" . $row["data"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado para o mês selecionado.";
    }
}

$conn->close();
?>
