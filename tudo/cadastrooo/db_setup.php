<?php
require_once("_con.php");

mysql_connect($host,$user,$pass) or die ("Banco de Dados Morreu");
mysql_select_db($db) or die ("Db não selecionada");

mysql_query ( "CREATE TABLE cad (
  nome varchar(50) NOT NULL,
  empresa varchar(80) NOT NULL,
  endereco varchar(150) NOT NULL,
  cidade varchar(50) NOT NULL,
  estado varchar(2) NOT NULL,
  fone varchar(30) NOT NULL,
  descricao varchar(150) NOT NULL
)");

echo "Tabela Banco de Dados Criada com Sucesso" ;

?>