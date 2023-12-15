<?php
session_start();
include('verifica_login.php');
include('conexao.php');
?>
<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>


<link rel="stylesheet" type="text/css" href="style.css" />
<ul>
    
    <li><a class= "button" href="veiculos.html">Veículos</a></li>
    <li><a class= "button" href="rotas.html">Cadastrar Rotas</a></li>
    <li><a class= "button" href="dados.php">Cadastrados</a></li>
    <li><a class= "button" href="calculorotas.php">Calcular Rotas</a></li>
    
</ul>

<ul>
    <li><a class= "button" href="logout.php">Sair</a></li>
</ul>