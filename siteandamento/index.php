<?php
session_start();

?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Pagina Inicial| Pesquisa de Satisfação</title>
        <link href="css/estilo.css" rel="stylesheet" type="text/css" />
        <link href="css/reset.css" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <div id="geral_home">

            <div id="fundo_inicial">
                <div class="menu">
                    <ul>
                        <div class="menu_links">
                            <li><a href="index.html" class="active">Termos de uso</a></li>
                        </div>
                        <div class="menu_links">
                            <li> NÃO TEM CADASTRO? <a href="cadastro.html"> Criar minha conta</a></li>

                        </div>


                    </ul>
                </div>
                <!--fim classe menu-->
                <center>
                    <div class="box_txt">
                        Ajude a melhorar o ambiente da faculdade avaliando-a.
                    </div>
                </center>


                <div class="caixa_texto">

                    <p>
                        <h1>JÁ TEM CADASTRO?</h1>
                        <hr></hr>

                    </p>
                    <br>
                    <form action="valida.php" method="POST">
                        <p>
                            <br> <label for="Login">Login:</label><br><br><input name="Login" type="text" placeholder="Digite seu login">
                            <br>

                            <br> <label for="Senha">Senha:</label><br><br><input name="Senha" type="password" placeholder="Digite uma senha">
                            <br>
                            <br>

                            <input type="submit" name="btnLogin" value="Enviar">
                        </p>
                    </form>

                    <p class="text-center text-danger">
                        <?php 
                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        ?>

                    </p>

                       




               
                </div>



                <div class="texto_apresentação">
                    <p>
                        <h1>Somos estudante da organização CETEC<br> e em nossa aula de programação para<br> internet foi proposto um desafio profissional ,<br> logo após isto, tivemos a ideia de criar um <br>ambuente de avaliação das areás de nossa faculdade.
                        </h1>
                    </p>

                </div>




            </div>
            <!--AQUI QUE O FUNDO_INICIAL TERMINA-->
            <div class="rodape">
                <p>
                    <h1>Todos os direitos reservado ao grupo 7</h1>
                </p>
            </div>
            <!--fim rodape-->
        </div>
        </div>


    </body>

    </html>