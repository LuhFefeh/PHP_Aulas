<?php
    // O mesmo codigo anterior sem comentarios
    $gestor = new PDO("mysql:host=localhost;dbname=bancoteste;charset=utf8","root","");
    $dados = $gestor->query("SELECT * from fornecedores");
    $fornecedores = $dados->fetchALL(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Fornecedores</h3>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Fornecedor</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($fornecedores as $fornec):?>
                <tr>
                    <td><?= $fornec["codigo"] ?></td>
                    <td><?= $fornec["nome"] ?></td>
                    <td><?= $fornec["email"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>        
    </table>
    <p>Total fornecedores: <strong><?= count($fornecedores) ?></p>
    </hr>
</body>
</html>