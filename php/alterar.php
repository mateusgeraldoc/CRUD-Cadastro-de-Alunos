<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta - Alterar</title>
    <link rel="stylesheet" href="../css/exibir_consulta.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <style>
        table td{padding: 2px 0;}
    </style>
</head>
<body>
    <div class="container">
    <a href="consulta.php"><img width="30px" style="opacity: 30%;" src="../img/seta-voltar.png"></a>
        <div class="table-container">
        <form action="registro_alterado.php" method="post" target="_self">
        <table>
            <?php
            include_once('conexao.php');
            
            $Cod_Aluno = $_POST["Cod_Aluno"];
            $Nome = $_POST["Nome_Aluno"];
            $Telefone = $_POST["Telefone"];
            $Email = $_POST["Email"];
            
            $busca = mysqli_query($conexao, "SELECT Aluno.Cod_Aluno as Codigo, Aluno.Nome_Aluno as Aluno, Aluno.Telefone, Aluno.Email 
                                             FROM Aluno
                                             WHERE Cod_Aluno = $Cod_Aluno");

            if ($busca) {
                echo "<tr style='display=none;'>
                        <th class='tittle-info'>Info</th>
                        <th>Dados</th>
                    </tr>";
                    
                while($linha = mysqli_fetch_array($busca)){
                    echo 
                    "<tr hidden>
                        <td class='info'>Codigo</td>
                        <td><input class='id' type='text' name='Cod_Aluno' value='" . $linha['Codigo'] . "'></td>
                    </tr>
                    <tr>
                        <td class='info'>Aluno</td>
                        <td><input class='input-alterar' type='text' name='Nome_Aluno' value='" . $linha['Aluno'] . "'></td>
                    </tr>
                    <tr>
                        <td class='info'>Telefone</td>
                        <td><input class='input-alterar' type='tel' name='Telefone' value='" . $linha['Telefone'] . "' maxlength='10'></td>
                    </tr>
                    <tr>
                        <td class='info'>Email</td>
                        <td><input class='input-alterar' type='email' name='Email' value='" . $linha['Email'] . "'></td>
                    </tr>
                    <tr>
                        <td class='button-alterar'><button class='submit-button' type='submit' name='opcao' value='atualizar'>Atualizar</button></td>
                    </tr>
                    <tr>
                        <td class='button-excluir'><button class='submit-button' type='submit' name='opcao' value='excluir'>Excluir</button></td>
                    </tr>";
                }
            } else {
                echo "<p>Erro na consulta: " . mysqli_error($conexao) . "</p>";
            }
            ?>
        </table>
        </form>
        </div>
    </div>
</body>
</html>
