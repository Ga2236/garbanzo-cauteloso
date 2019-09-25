<?php

 $conn = new mysqli("localhost","root","root","financas_gabrielmarciano");
    if($conn->connect_error){
        die("Conexao falhou: ".$conn->connect_error);
    }
?>
