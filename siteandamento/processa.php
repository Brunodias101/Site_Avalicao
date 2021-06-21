<?php

session_start();



$nome = filter_input (INPUT_POST, 'NomeCompleto', FILTER_SANITIZE_STRING);
$usuario_login= filter_input(INPUT_POST, 'Usuario', FILTER_SANITIZE_STRING);
$Faculdade= filter_input(INPUT_POST, 'Faculdade', FILTER_SANITIZE_STRING);
$Curso= filter_input(INPUT_POST, 'Curso', FILTER_SANITIZE_STRING);
$CPF= filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);
$Senha= filter_input(INPUT_POST, 'Senha', FILTER_SANITIZE_STRING);



include_once('conexao.php');

$result_usuario="INSERT INTO cadastro (NomeCompleto,Usuario,Faculdade,Curso,CPF,Senha) VALUES ('$nome',
'$usuario_login','$Faculdade','$Curso','$CPF','$Senha')";

$resultado_usuario = mysqli_query($conn, $result_usuario);
// $result_usuario = "INSERT INTO usuarios (nome, email, created) VALUES ('$nome', '$email', NOW())";
// $resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    header("Location: index.php");

}else{
    header("Location: cadastro.html");

}


