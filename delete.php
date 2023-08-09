<?php 

require_once('./includes/conexao.php');

$id = $_GET['id'];

$connection->select_db('contatos');

$sql = "DELETE FROM contatos where id = " . $id;

if($connection->query($sql)) {

    header("Location: /modulo-21");

} else {

}


?>