<?php

    $con = new PDO("mysql:host=localhost;dbname=crud_fullstack","root","1234");
    $con -> setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    if(isset($_POST['tarefa'])){
        $tarefa = filter_input(INPUT_POST,'tarefa', FILTER_SANITIZE_STRING);
        $query = "INSERT INTO tarefas (descricao, concluida) VALUES (:descricao, 0)";
        $stm = $con -> prepare($query);
        $stm -> bindParam('descricao',$tarefa);
        $stm -> execute();
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista de Tarefas</title>
</head>
<body>
    <div class="form">
        <form method="post">
            Nova tarefa: <input type="text" placeholder="Digite aqui sua nova tarefa"></input>
            <input type="submit">
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>