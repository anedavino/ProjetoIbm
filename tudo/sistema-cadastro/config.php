<?php

define('BD_USER', 'gabriela_rocha'); // USE O TEU USUÁRIO DE BANCO DE DADOS
define('BD_PASS', 'gabi123456'); // USE A TUA SENHA DO BANCO DE DADOS
define('BD_NAME', 'teste'); // USE O NOME DO TEU BANCO DE DADOS

mysql_connect('localhost', BD_USER, BD_PASS);
mysql_select_db(BD_NAME);


?>