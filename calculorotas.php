<?php
session_start();
include('verifica_login.php');
include('conexao.php');

$servername = "localhost";
$username = "usuarioteste";
$password = "123456";
$dbname = "cadastroviagens";

// cria conexao
$conn = new mysqli($servername, $username, $password, $dbname);
// Checa conexao
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$query = "select * from rotas";
$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query);

?>
  <select>

<?php while($row0 = mysqli_fetch_array($result)):;?>

<option value="<?php echo $row0[1];?>"><?php echo $row0[0];?></option>

<?php endwhile;?>

</select>
<select>

<?php while($row1 = mysqli_fetch_array($result2)):;?>

<option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

<?php endwhile;?>

</select>

<link rel="stylesheet" type="text/css" href="style.css" />
<br>
<ul>
    <li><a class= "button" href="menu.php">voltar</a></li>
</ul>