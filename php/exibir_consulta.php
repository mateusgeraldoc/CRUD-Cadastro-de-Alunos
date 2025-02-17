<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="../css/exibir_consulta.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
    <a href="consulta.php"><img width="30px" style="opacity: 30%;" src="../img/seta-voltar.png"></a>
        <div class="table-container">
        <table>
            <?php
            include_once('conexao.php');

            if (isset($_POST["Cod_Turma"])) {
                $Cod_Turma = $_POST["Cod_Turma"];
            } else {
                echo "<p>Erro: 'opcao' não definida.</p>";
                exit();
            }

            $busca = mysqli_query($conexao, "SELECT Aluno.Cod_Aluno as Codigo, Aluno.Nome_Aluno as Aluno, Aluno.Telefone, Aluno.Email 
                                             FROM Aluno
                                             WHERE Cod_turma = $Cod_Turma");

            $turma = mysqli_query($conexao, "SELECT Turma.Nome_turma as Turma
                                             FROM Turma
                                             WHERE Cod_turma = $Cod_Turma");

            if ($turma) {
             $linha_turma = mysqli_fetch_assoc($turma);
                echo "<h1>" . $linha_turma['Turma'] . "</h1>";
            } else {
                echo "<p>Erro na consulta de Turma: " . mysqli_error($conexao) . "</p>";
            }
            
            if ($busca) {
                echo "<tr>
                        <th>ID</th>
                        <th>Aluno</th>
                        <th>Telefone</th>
                        <th>Email</th>
                    </tr>";
                    
                while($linha = mysqli_fetch_array($busca)){
                    echo 
                    "<tr>
                        <td>" .$linha['Codigo']. "</td>
                        <td>" .$linha['Aluno']. "</td>
                        <td>" .$linha['Telefone']. "</td>
                        <td>" .$linha['Email']. "</td>
                        <td> <a class='alterar' href='#'>ALTERAR</a> </td>
                        <td> <a class='excluir' href='#'>EXCLUIR</a> </td>
                    </tr>";
                }
            } else {
                echo "<p>Erro na consulta: " . mysqli_error($conexao) . "</p>";
            }
            ?>
        </table>
        </div>
    </div>
</body>
</html>
