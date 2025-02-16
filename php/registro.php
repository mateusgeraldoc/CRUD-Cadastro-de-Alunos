<?php
include_once('conexao.php');

$Nome = $_POST["Nome_Aluno"];
$Telefone = $_POST["Telefone"];
$Email = $_POST["Email"];
$Cod_Turma = $_POST["Cod_Turma"];

$registro = "INSERT INTO Aluno (Nome_Aluno, Telefone, Email, Cod_Turma)
             VALUES ('$Nome', '$Telefone', '$Email', '$Cod_Turma')";

$resultado = mysqli_query($conexao, $registro);

if ($resultado) {
    echo "<p>Registro Inserido Com Sucesso</p>";
} else {
    echo "<p>Erro: " . mysqli_error($conexao) . "</p>";
}

echo '<a href="../index.html">Voltar</a>';
?>
