<?php
session_start();
include_once('conexao.php');

$btnLogin =filter_input (INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);


if ($btnLogin){
   
$login = filter_input (INPUT_POST, 'Login', FILTER_SANITIZE_STRING);
$senha= filter_input(INPUT_POST, 'Senha', FILTER_SANITIZE_STRING);

echo "$login - $senha";
echo('....');

if((!empty($login)) AND (!empty($senha))){

    // $result_usuario = "SELECT id, nome, email, senha FROM usuarios WHERE usuario='$usuario' LIMIT 1";

    $result_usuario = "SELECT  Usuario, Senha FROM cadastro WHERE Usuario='$login' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    if($resultado_usuario){
        $row_usuario = mysqli_fetch_assoc($resultado_usuario);
        echo("aq");
        echo('....');

        
       
        if(password_verify($senha, $row_usuario['Senha'])){
            // $_SESSION['id'] = $row_usuario['id'];
            $_SESSION['Usuario'] = $row_usuario['Usuario'];
            $_SESSION['Senha'] = $row_usuario['Senha'];

            header("Location: avaliacao.html");
            echo("aqui 1");

        }else{
            $_SESSION['msg'] = "Login e senha incorreto!";
            // header("Location: index.php");
            // $_SESSION['id'] = $row_usuario['id'];
        $_SESSION['Usuario'] = $row_usuario['Usuario'];
        echo( $_SESSION['Usuario']);
        echo('....');
        $_SESSION['Senha'] = $row_usuario['Usuario'];
        echo( $_SESSION['Senha']);
        echo('....');
            echo "$login - $senha";
            echo('....');

            echo("aqui");
        }
    }
}else{
    $_SESSION['msg'] = "Login ou senha incorreto";
header("Location: index.php");
}
    



}else{
    $_SESSION['msg'] = "Pagina não encontrada";
    header("Location: index.php");
}
