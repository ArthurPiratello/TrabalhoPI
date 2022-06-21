<?php
include_once('inde.php');
$nome=$_POST['nome'];
$email=$_POST['email'];
$mensagem=$_POST['mensagem'];

$sql= "INSERT INTO test
(nome, email, mensagem) VALUES
('$nome', '$email', '$mensagem')";
$query= mysqli_query($conexão, $sql)

?>

<script>
    window.alert('Sucesso ao enviar as informações!')
    window.location.href= "index.html";
</script>
