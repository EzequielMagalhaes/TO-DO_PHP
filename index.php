<?php
    define("HOST", "localhost");
    define("USER","root");
    define("PASS","");
    define("BASE","crud_fullstack");

    $con = new MySQLi(HOST, USER, PASS, BASE);
        // Verificar a conexão
        if (!$con) {
            die("Falha na conexão: " . mysqli_connect_error());
        }
        echo "Conectado com sucesso!\n";
        if (isset($_REQUEST["acao"])) {
            switch($_REQUEST["acao"]){
                case "cadastrar":
                    $descricao = $_POST["descricao"];
                    
                    $concluida = $_POST["concluida"];
                    $sql = "INSERT INTO tarefas (descricao,concluida) VALUES ('{$descricao}', 0)";
                    $res = $con->query($sql);
                    break;
                    case "editar":
                        //codigo.
                        break;
                    case "excluir":
                        //codigo.
                        break;
                    }
                    // Fechar a conexão
                    mysqli_close($con);
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
    <div class="container">
        <form method="post">
            <input type="hidden" name="acao" value="cadastrar">
            Nova tarefa:<input type="text" name= "descricao" placeholder="Digite aqui sua nova tarefa"></input>
            <input type="checkbox" name="concluida" id="ckbox">
            <input type="submit">
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>