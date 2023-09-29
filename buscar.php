<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Busca</title>
</head>
<body>
    <h1>Resultado da Busca</h1>
    <?php
    // Verifica se o parâmetro "query" foi enviado via GET
    if (isset($_GET['query'])) {
        $query = $_GET['query'];
        echo "Você buscou por: " . htmlspecialchars($query);
    } else {
        echo "Nenhum termo de busca foi especificado.";
    }
    ?>
</body>
</html>