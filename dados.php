<?php
session_start();
include ('verifica_login.php');
include('conexao.php');
  // conexao
$servername = "localhost";
$username = "usuarioteste";
$password = "715068";
$dbname = "cadastroviagens";

// cria conexao
$conn = new mysqli($servername, $username, $password, $dbname);
// Checa conexao
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT origem, destino, distancia FROM ROTAS";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // saida para as colunas
    while($row = $result->fetch_assoc()) {
      echo "origem: " . $row["origem"]. " |destino: " . $row["destino"]. "|distancia KM: " . $row["distancia"]. "<br>";
    }
  } else {
    echo "0 results";
  }

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT veiculo, combustivel, autonomia, valorcombustivel FROM veiculos";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    /// saida para as colunas
    while($row = $result->fetch_assoc()) {
      echo "Veículo: " . $row["veiculo"]. " |Combustível: " . $row["combustivel"]. "|Autonomia: " . $row["autonomia"]."|Valor Combustível: ". $row["valorcombustivel"]. "<br>";
    }
  } else {
    echo "0 results";
  }
?>
<link rel="stylesheet" type="text/css" href="style.css" />
<br>
<ul>
    <li><a class= "button" href="menu.php">voltar</a></li>
</ul>