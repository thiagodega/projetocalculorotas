<?php
session_start();
include ('verifica_login.php');
include ('conexao.php');
$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die('conexão com banco nao estabelecida');
$origem = $_POST['origem'];
$destino = $_POST['destino'];
$distancia = $_POST['distancia'];

$sql = "insert into rotas values";
$sql .= "('$origem', '$destino', '$distancia')";

if ($conexao->query($sql) === TRUE) {
  echo "Dados cadastrados com sucesso!";

} else{
  echo "Erro:" . $sql . "<br>" . $conexao->error;

}

$conexao->close();
?>
<link rel="stylesheet" type="text/css" href="style.css" />
<br>
<ul>
    <li><a class= "button" href="menu.php">voltar</a></li>
</ul>

