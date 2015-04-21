<?php
# MySql configurações
$hostname_MySql = "localhost";  // Servidor
$database_MySql = "BANCODADOS"; // banco de dados
$username_MySql = "USUARIO"; // Usuario
$password_MySql = "SENHA";  // senha
$MySql = mysql_pconnect($hostname_MySql, $username_MySql, $password_MySql) or trigger_error(mysql_error(),E_USER_ERROR); 
?>