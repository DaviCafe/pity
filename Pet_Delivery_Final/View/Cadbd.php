<?php
include "Conexao.php";

$sql="INSERT INTO `Cadastro`( `email`, `senha`,) VALUES 
('".$_POST['email']."','".$_POST['senha']."')";

$stmt = $pdo->prepare($sql);
$stmt->execute();

header('location: menu.php');
