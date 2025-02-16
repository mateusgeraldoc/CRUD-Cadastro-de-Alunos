<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
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

            if ($busca) {
                while($linha = mysqli_fetch_array($busca)){
                    echo 
                    "<tr>
                        <th>Código</th>
                        <th>Aluno</th>
                        <th>Telefone</th>
                        <th>Email</th>
                    </tr>
                    <tr>
                        <td>" .$linha['Codigo']. "</td>
                        <td>" .$linha['Aluno']. "</td>
                        <td>" .$linha['Telefone']. "</td>
                        <td>" .$linha['Email']. "</td>
                    </tr>";
                }
            } else {
                echo "<p>Erro na consulta: " . mysqli_error($conexao) . "</p>";
            }
            ?>
        </table>
        <a href="../index.html">Voltar</a>
    </div>
</body>
</html>
