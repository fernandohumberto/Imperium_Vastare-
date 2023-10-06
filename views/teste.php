<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main class="containter">
        <table class="table">
            <thead>
                <tr><th>
                    Nome
                </th>
            <th>User</th></tr>
            </thead>
        <tbody>
            <?php
            foreach($users as $user){
                ?> <tr>
                    <td><?= $user->getNome() ?></td>
                    <td><?= $user->getUser()?></td>
                </tr><?php 
            }
            ?>
        </tbody>
        </table>
    </main>
</body>
</html>