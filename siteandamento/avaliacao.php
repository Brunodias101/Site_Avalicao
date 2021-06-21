<?php
session_start();
if(!empty($_SESSION['id'])){

    
	
}else{
	$_SESSION['msg'] = "Área restrita";
	header("Location: index.php");	
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Avaliação | Pesquisa de Satisfação</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div id="geral_home">
        
<div class="menu">
            <ul>
                <li><a href="avaliacao.html" class="active">Avaliação</a></li>
                <li><a href="areas_da_instituicao.html">Áreas da Instituição</a></li>
                <li><a href="grafico_de_avaliacao.html">Gráfico De Avaliação</a></li>
            </ul>
        </div>
        <!--fim classe menu-->

        <div class="topo_home">
        </div>
        <!--fim topo home -->
        <!--fim menu-->
        <div class="box_txt5">

            <h2>Selecione uma área a instituição:</h2>
            <hr>
            <br>
            <br>
            <p> <label for="areas_da_instituicao">Área Da Instituição:<br><br>
                <form method="POST" action="S">
                    <select name="areas">
<option value="s.o"> Selecione uma opção</option>
<option value="direcao">Direção De Faculdade</option>
<option value="comissoes">Comissões</option>
<option value="conselho">Conselho de unidade</option>
<option value="atendimento">Atendimento ao Aluno</option>
</select>

            </p>
            <br>
            <br>
            <p><label for="Nota">Nota:</label><br><br><input name="Nota" id="input_valor" type="number" value="" size="15" min="1" max="5" placeholder="selecione uma nota de 1 a 5"></p>
            <br>
            <br>


            <label for="Descriacao">Descrição:</label><br><br> <input name="Descricao" type="text" size="40" maxlength="280" />

            <br>
            <br> <button id="button_cadastro" type="reset">Excluir</button>
            <button id="button_cadastro" type="submit">Enviar</button>

            </form>
        </div>

        <section class="section_rodape">
            <div class="rodape" id="rodape_avaliacao">
                <p>
                    <h1>Todos os direitos reservado ao grupo 7</h1>
                </p>
            </div>

        </section>
        <!-- fim rodape-->
    </div>








</body>

</html>