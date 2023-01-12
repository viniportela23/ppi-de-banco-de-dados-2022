<!DOCTYPE html>
<html>
<head>
	<title>Metais alcalino-terrosos</title>
<link rel="icon" href="iffar2.png">
</head>
<img src="iffar.png" width="250" align="right">
<body>
	<h2>Metais alcalino-terrosos</h2>

<?php


$endereco = "localhost";
$banco = "tabelaperi";
$usuario = "root";
$senha = "";


$pdo = new PDO("mysql:dbname=".$banco."; host=".$endereco, $usuario, $senha);
$pdo->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $pdo->query("SELECT numele FROM familia WHERE familia = 'metais alcalino-terrosos'");
$sql->execute();

$resultados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($resultados);

$sql = $pdo->query("SELECT sigla,nome, numeroat FROM elementos WHERE familia = 'metais alcalino-terrosos'");
$sql->execute();

$resultados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($resultados);exit;

?>
