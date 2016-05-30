<?php
$string_connect = "host=$host port=$port dbname=$db user=$user password=$pass"; // Variável com as informações para a conexão ser feita
$connect = pg_pconnect($string_connect); // Comando para conectar-se ao servidor
?>