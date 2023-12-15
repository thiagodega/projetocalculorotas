<?php
session_start();
include ('conexao.php');
$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die('conexão com banco nao estabelecida');

if (empty($_POST['nomeusuario']) || empty($_POST['senhausuario'])) {
header('Location: index.html');
exit();

}

$usuario = mysqli_real_escape_string($conexao, $_POST['nomeusuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senhausuario']);

$query = "select * from usuarios where usuario = '$usuario' and senha = '$senha'";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if ($row ==1){
    $_SESSION['usuario'] = $usuario;
    header('Location: menu.php');
    exit();
} else {
  header('Location: index.html');
  exit();
}

?>