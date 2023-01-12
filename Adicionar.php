<!DOCTYPE html>
<html>
<head>
	<title>Adição</title>
<link rel="icon" href="iffar2.png">
</head>
<img src="iffar.png" width="250" align="right">
<body>
	<h2>Adição de elementos</h2>

<form method="post" action="pagina_adicao.php">
<?php

    echo "   Digite o nome do elemento: <input type='text' name='input_1'>";
    echo "   Digite a sigla do elemento: <input type='text' name='input_2'>";
    echo "   Digite o numero atomico do elemento: <input type='text' name='input_3'>";
    echo "   Digite o nome da familia: <input type='text' name='input_4'>";
?>
   <input type='submit' value='Continuar'>
</form>