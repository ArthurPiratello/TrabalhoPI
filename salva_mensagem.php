<?php
include_once('index.php');
$nome=$_POST['nome'];
$email=$_POST['email'];
$mensagem=$_POST['mensagem'];

$sql= "INSERT INTO teste
(nome, email, mensagem) VALUES
('$nome', '$email', '$mensagem')";
$query= mysqli_query($conexão, $sql)

?>

<h1>Sucesso ao enviar as informações!</h1>