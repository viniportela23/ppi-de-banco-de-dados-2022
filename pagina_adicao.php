<html>
<head>
	<title>Busca</title>
<link rel="icon" href="iffar2.png">
</head>
<img src="iffar.png" width="250" align="right">

<?php

$endereco = "localhost";
$banco = "tabelaperi";
$usuario = "root";
$senha = "";

$nome = $_POST["input_1"];
$sigla = $_POST["input_2"];
$numero = $_POST["input_3"];
$familia = $_POST["input_4"];


$pdo = new PDO("mysql:dbname=".$banco."; host=".$endereco, $usuario, $senha);
$pdo->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $pdo->prepare("INSERT INTO elementos (nome, sigla, numeroat, familia) VALUES ('$nome', '$sigla', $numero, '$familia');");
$sql->execute();
$sql = $pdo->prepare("UPDATE familia SET numele = numele+1 WHERE familia like '$familia';");
$sql->execute();

?>

<!DOCTYPE html>
<html>
<head>
   <title>Busca</title>
</head>
<body>
   <h2>Clique para voltar ao menu </h2>
      <form action="index.php" method="GET">
      <button style="width:200px;">Adicionar elemento</button>
   </form>
</body>
</html>