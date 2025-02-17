<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="exibir_consulta.php" method="post" >
            <a href="../index.html"><img width="30px" style="opacity: 30%;" src="../img/seta-voltar.png"></a>
            <h1>Consulta</h1>
            <div class="input-container">
                <select name="Cod_Turma">
                    <option value="" disabled selected>Turma...</option>
                    <?php
                    ini_set('display_errors', 1);
                    ini_set('display_startup_errors', 1);
                    error_reporting(E_ALL);

                    include_once('conexao.php');
                    if (!$conexao) {
                        die("Falha na conexão: " . mysqli_connect_error());
                    }

                    $consulta=mysqli_query($conexao, "SELECT Cod_Turma as codigo, Nome_Turma as turma FROM Turma");
                    if (!$consulta) {
                        die("Erro na consulta: " . mysqli_error($conexao));
                    }

                    while($linha = mysqli_fetch_array($consulta)){
                        echo "<option value='" .$linha['codigo']. "'>" .$linha['turma']. "</option>";
                    }
                    ?>
                </select>
            </div>
            <button class="submit-button" type="submit">Concluir</button>
        </form>
    </div>
</body>
</html>