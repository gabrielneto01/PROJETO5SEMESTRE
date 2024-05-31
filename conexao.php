<?php 

/* conexão local do pc
$servername = "127.0.0.1";
$database = "tecplay";
$username = "root";
$password = '';*/

//conexão do site de hospedagem

$servername = "localhost";
$database = "id21535433_tecplay";
$username = "id21535433_root";
$password = 'Tecplay@uni9';


// criando conexão

$conexao = mysqli_connect($servername, $username, $password, $database);

// testando conexão
if (!$conexao) {
    
    die("Connection failed: " . mysqli_connect_error());
    
} 
//	echo "Connected successfully";
 
// $sql = "INSERT INTO Students (name, lastname, email) VALUES ('Test', 'Testing', 'Testing@tesing.com')";

//criando a query
// $sql = "SELECT * FROM usuarios";

// testando a query
// if (mysqli_query($conn, $sql)) {
      // echo "tem usuariso cadastrados";
// } else {
      // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }






?>