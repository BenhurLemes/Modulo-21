<?php 
    include('./includes/function.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Agenda de Contatos</title>
</head>
<body>
    <div class="container">
        <h1>Agenda de Contatos</h1>
        <form action="./cadastra.php" method="post">
            <input type="text" name="name" placeholder="Nome">
            <input type="text" name="lastname" placeholder="Sobrenome">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="phone" placeholder="Telefone">
            <button type="submit">Cadastrar</button>
        </form>

        <ul>
            <?php include('./includes/listaContatos.php') ?>
        </ul>
    </div>
</body>
</html>