<?php
session_start();

include_once('conexao.php');

// $consulta = "SELECT nota FROM avaliacao  LIMIT 2";
// $con= $mysqli->query($consulta) or die ($mysqli->error);

$result_nota = "SELECT * FROM avaliacao ";
$resultado_nota = mysqli_query($conn, $result_nota);
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Avaliação | Pesquisa de Satisfação</title>
    <link href="css/stile_descricao.css" rel="stylesheet" type="text/css" />


</head>

<body>
    <div class="menu">
        <ul>
            <li><a href="avaliacao.html">Faça uma avaliação</a></li>
            <li><a href="areas_da_instituicao.html">Áreas da Instituição</a></li>
            <li><a href="descricoes.php" class="active">Veja as valiações</a></li>
        </ul>
    </div>
    <div class="geral_home">

        <?php while ($dado = mysqli_fetch_assoc($resultado_nota)) { ?>
            <p> <?php // $_SESSION['nota'] =$dado['nota'];
                //$_SESSION['descricao'] =$dado['descricao'];

                //echo $_SESSION['nota']; 
                //echo $_SESSION['descricao'];
                ?>
            <p align="center">
            <H1>
                <p align="center"><?php echo $dado['area_instituicao'] ?></p>
            </H1>
            <table align="center" border="1" class="tabela">
                <tr>
                    <td align="center">Data de avaliação</td>
                    <td align="center">Nota</td>
                    <td align="center">Descrição</td>
                    <td align="center">Data de avaliação</td>

                </tr>
                <tr>
                    <td> <?php echo $dado['area_instituicao'] ?> </td>
                    <td> <?php echo $dado['nota'] ?> </td>
                    <td><?php echo $dado['descricao'] ?> </td>
                    <td><?php echo $dado['dataavaliacao'] ?> </td>
                </tr>
            </table>
            </p>
            </p>


        <?php } ?>

    </div>
</body>

</html>