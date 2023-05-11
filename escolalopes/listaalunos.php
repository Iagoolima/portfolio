
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Alunos</title>
    <link rel="shortcut icon" href="imagens/simboloFavicon.ico">
</head>
<body>
    <style>
        body{
            font-family: calibri;
            font-size: 20px;
        }
        h1{
            justify-content: center;
            display: flex;
            width: 100%;
        }
        
    </style>
    <h1>Atividades realizadas</h1><hr>
    
<?php

include_once("conexao.php");

$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);



$redacao_ferias = "select * FROM alunos";
$atividade_ferias = mysqli_query($mysqli, $redacao_ferias);
while($row_aluno = mysqli_fetch_assoc($atividade_ferias)){
echo "<br>-ID: ". $row_aluno['id']."<br>";
echo "<br>-Nome: ". $row_aluno['Nome']."<br>";
echo "<br>-Idade: ". $row_aluno['Idade']."<br>";
echo "<br>-Sala: ". $row_aluno['Sala']."<br>";
echo "<br>-Texto: ". $row_aluno['texto_Redação']."<br>";
echo "<br>-Data: ". $row_aluno['Data']."<br><br><hr>";
}

?>


</body>

  