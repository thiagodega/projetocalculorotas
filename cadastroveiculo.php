<?php
session_start();
include ('verifica_login.php');
include ('conexao.php');
$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die('conexão com banco nao estabelecida');
$veiculo = $_POST['veiculo'];
$tipocomb = $_POST['tipocomb'];
$autonomia = $_POST['autonomia'];
$combustivel = $_POST['combustivel'];

$sql = "insert into veiculos values";
$sql .= "('$veiculo', '$tipocomb', '$autonomia', '$combustivel')";

if ($conexao->query($sql) === TRUE) {
  echo "Dados cadastrados com sucesso!";

} else{
  echo "Erro:" . $sql . "<br>" . $conexao->error;

}

$conexao->close();
?>
<link rel="stylesheet" type="text/css" href="style.css" />
<ul>
    <li><a class= "button" href="menu.php">voltar</a></li>
</ul>