<?php
include_once('conexao.php');

$Nome = _POST["Nome_Aluno"];
$Telefone = _POST["Telefone"];
$Email = _POST["Email"];
$Cod_Turma = _POST["Cod_Turma"];

$registro = mysqli_query("INSERT INTO Aluno(Nome_Aluno, Telefone, Email, Cod_Turma)
                        VALUES ('$Nome', '$Telefone', '$Email', '$Cod_Turma')");

$resultado = mysqli_query($conexao, $registro) or die ("<p>Erro.</p>")
echo "<p>Registro Inserido Com Sucesso</p>"
echo "<a href="infex.html">Voltar</a>"
?>