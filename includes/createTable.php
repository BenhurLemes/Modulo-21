<?php 

require_once("./conexao.php");

$sql = "CREATE TABLE contatos (" .
       "id INT UNSIGNED AUTO_INCREMENT,".
       "name VARCHAR(30) NOT NULL,".
       "lastname VARCHAR(30)," .
       "phone VARCHAR(30)," .
       "email VARCHAR(30) NOT NULL,".
       "create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, ". 
       "PRIMARY KEY(id)".
       ");";

if($connection->select_db('contatos')){
    if($connection->query($sql)){
        echo "Tabela criada! <br>";
    } else {
        echo "erro na criação <br> " . $connection->error;
    }
} else {
    echo "erro ao selecionar banco de dados " . $connection->error;
}

$connection->close();
?>