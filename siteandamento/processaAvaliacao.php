<?php



$areas = filter_input (INPUT_POST, 'areas', FILTER_SANITIZE_STRING);
$Nota= filter_input(INPUT_POST, 'Nota', FILTER_SANITIZE_STRING);
$Descricao= filter_input(INPUT_POST, 'Descricao', FILTER_SANITIZE_STRING);

echo ("Area: $areas <br>");
echo ("Nota: $Nota <br>");

include_once('conexao.php');

$result_avaliacao="INSERT INTO avaliacao (area_instituicao,nota,descricao,dataavaliacao) VALUES ('$areas','$Nota','$Descricao', NOW() )";

$resultado_avaliacao = mysqli_query($conn, $result_avaliacao);

if(mysqli_insert_id($conn)){
    header("Location: avaliacao.html");

}else{
    header("Location: avaliacao.html");

}