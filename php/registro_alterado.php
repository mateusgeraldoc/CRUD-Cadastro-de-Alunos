<?php
include_once('conexao.php');

$Cod_Aluno = $_POST["Cod_Aluno"];
$Nome = $_POST["Nome_Aluno"];
$Telefone = $_POST["Telefone"];
$Email = $_POST["Email"];
$opcao = $_POST['opcao'];

if($opcao=='atualizar'){
    $registro = mysqli_query($conexao, "UPDATE Aluno
                                        SET Nome_Aluno = '$Nome', 
                                            Telefone = '$Telefone',
                                            Email = '$Email'
                                        WHERE Cod_Aluno = $Cod_Aluno");
    if ($registro) {
        echo "<p>Registro Alterado Com Sucesso</p>";
    } else {
        echo "<p>Erro: " . mysqli_error($conexao) . "</p>";
    } 
    
}  elseif($opcao=='excluir'){
        $registro = mysqli_query($conexao, "DELETE FROM Aluno
                                            WHERE Cod_Aluno = $Cod_Aluno");
    if ($registro) {
        echo "<p>Registro Alterado Com Sucesso</p>";
    } else {
        echo "<p>Erro: " . mysqli_error($conexao) . "</p>";
    }
} else {
    echo "<p>Erro: " . mysqli_error($conexao) . "</p>";
}
    echo '<a href="../index.html">Voltar</a>';
?>
