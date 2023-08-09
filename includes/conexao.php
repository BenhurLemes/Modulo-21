<?php 

$server = "localhost";
$user = "root";
$password = "";
$database = "contatos";

$connection = new mysqli($server, $user, $password, $database);

if($connection->error){
    die("Falha na conexão <br>" . $connection->error);
}else{
    echo "conexão realizada";
}
 
?>