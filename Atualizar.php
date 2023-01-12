<!DOCTYPE html>
<html>
<head>
	<title>Atualização</title>
<link rel="icon" href="iffar2.png">
</head>
<img src="iffar.png" width="250" align="right">
<body>
	<h2>Atualização de elementos</h2>

<form method="post" action="pagina_atualizacao.php">
<?php

    echo "   Digite o numero atomico do elemento: <input type='text' name='input_1'>";
    echo "   Digite um novo nome: <input type='text' name='input_2'>";
    echo "   Digite uma nova sigla: <input type='text' name='input_3'>";
    echo "   Digite o nome da nova familia: <input type='text' name='input_4'>";
?>
   <input type='submit' value='Continuar'>
</form>